<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index(): View
    {
        // データベースから先生全員のデータを取得
        $teachers = Teacher::all();

        // 画面（resources/views/teachers/index.blade.php）にデータを渡して表示
        return view('teachers.index', compact('teachers'));
    }
}