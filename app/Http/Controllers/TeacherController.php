<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index(): View
    {
        $teachers = Teacher::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('teachers.index', compact('teachers'));
    }
}
