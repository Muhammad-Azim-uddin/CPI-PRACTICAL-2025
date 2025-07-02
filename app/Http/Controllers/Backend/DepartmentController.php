<?php

namespace App\Http\Controllers\Backend;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    function index()
    {
        $departments = Department::get();
        return view('backend.department.index', compact('departments'));
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name',
            'head' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/departments'), $imageName);
            $validated['image'] = 'uploads/departments/' . $imageName;
        }

        // Create department
        Department::create($validated);

        return redirect()->back()->with('success', 'Department added successfully!');
    }

    // Update
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name,' . $department->id,
            'head' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($department->image && file_exists(public_path($department->image))) {
                unlink(public_path($department->image));
            }
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/departments'), $imageName);
            $validated['image'] = 'uploads/departments/' . $imageName;
        }

        $department->update($validated);

        return redirect()->back()->with('success', 'Department updated successfully!');
    }

    // Destroy
    public function destroy($id)
    {
        $department = Department::findOrFail($id);

        if ($department->image && file_exists(public_path($department->image))) {
            unlink(public_path($department->image));
        }

        $department->delete();

        return redirect()->back()->with('success', 'Department deleted successfully!');
    }
}
