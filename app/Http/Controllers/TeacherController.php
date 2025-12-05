<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        // 表示順(sort_order)に並べて取得
        $teachers = Teacher::orderBy('sort_order', 'asc')->get();
        return view('teachers.index', compact('teachers'));
    }
}