<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログインフォームを表示
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * ログイン処理を実行
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 認証を試行
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ログイン成功: 管理画面トップへリダイレクト
            return redirect()->intended('/admin');
        }

        // ログイン失敗: 元の画面に戻り、エラーメッセージを付与
        return back()->withErrors([
            'email' => '入力されたメールアドレスまたはパスワードが正しくありません。',
        ])->onlyInput('email');
    }

    /**
     * ログアウト処理を実行
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログアウト成功: ログインフォームへリダイレクト
        return redirect('/admin/login');
    }
}