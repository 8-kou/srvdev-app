<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'subject' => 'required|max:50',
            'message' => 'nullable|max:1000',
            'sort_order' => 'nullable|integer',
            'header_color' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('teachers', 'public');
        }

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'subject' => 'required|max:50',
            'message' => 'nullable|max:1000',
            'sort_order' => 'nullable|integer',
            'header_color' => ['nullable', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($teacher->image_path) {
                Storage::disk('public')->delete($teacher->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('teachers', 'public');
        }

        $teacher->update($validated);

        return redirect()->route('admin.teachers.index');
    }

    public function destroy(Teacher $teacher)
    {
        if ($teacher->image_path) {
            Storage::disk('public')->delete($teacher->image_path);
        }

        $teacher->delete();

        return redirect()->route('admin.teachers.index');
    }
}
