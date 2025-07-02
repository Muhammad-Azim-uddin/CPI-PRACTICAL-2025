<?php

namespace App\Http\Controllers\backend;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index($id = null)
    {

        return view('backend.teacher.index', compact('id'));
    }

    public function storeAndUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        if ($id) {
            $teacher = Teacher::findOrFail($id);
            $teacher->name = $request->name;
            $teacher->designation = $request->designation;
            $teacher->department = $request->department;
           
        } else {
            // Logic to create a new teacher
            // Create a new teacher with the provided details
        }
        return redirect()->route('backend.teacher.index');
    }

    public function destroy($id)
    {
        // Logic to delete a teacher
        return redirect()->route('backend.teacher.index');
    }
}
