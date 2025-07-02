<?php

namespace App\Http\Controllers\backend;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        // This method will handle the logic for displaying the about page
        $abouts = About::get();
        return view('backend.about.index', data: compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'nullable',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $about = new About();
        $about->title = $request->title;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->status = $request->status;
        $about->meta_title = $request->meta_title;
        $about->meta_description = $request->meta_description;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $about->image = $imagePath;
        } else {
            $about->image = null;
        }
        $about->save();
        return redirect()->route('backend.about.index')->with('success', 'About information saved successfully.');
    }

    public function edit($id)
    {

        $about = About::findOrFail($id);
        return view('backend.about.edit', compact('about'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $about = About::findOrFail($id);
        $about->title = $request->title ?? $about->title;
        $about->short_description = $request->short_description ?? $about->short_description;
        $about->long_description = $request->long_description ?? $about->long_description;
        $about->status = $request->status === 'publish' ? "publish" : "draft" ?? $about->status;
        $about->meta_title = $request->meta_title ?? $about->meta_title;
        $about->meta_description = $request->meta_description ?? $about->meta_description;

        if ($request->hasFile('image')) {
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }

            $path = $request->file('image')->store('about', 'public');
            $about->image = $path;
        }


        $about->save();
        return redirect()->route('backend.about.index')->with('success', 'About information updated successfully.');
    }

    public function destroy($id)
    {
        About::findOrFail($id)->delete();

        return redirect()->route('backend.about.index')->with('success', 'About deleted successfully!');
    }

    public function draft()
    {
        $abouts = About::where('status', 'draft')->get();
        return view('backend.about.draft', compact('abouts'));
    }
}
