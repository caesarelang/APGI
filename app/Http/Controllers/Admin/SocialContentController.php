<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = SocialContent::latest()->paginate(10);
        return view('admin.social-contents.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social-contents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:news,announcement,activity',
            'published_at' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'type' => $request->type,
            'published_at' => $request->published_at,
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ];

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('social-contents', 'public');
        }

        SocialContent::create($data);

        return redirect()->route('admin.social-contents.index')
                        ->with('success', 'Social content created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialContent $socialContent)
    {
        return view('admin.social-contents.show', compact('socialContent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialContent $socialContent)
    {
        return view('admin.social-contents.edit', compact('socialContent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialContent $socialContent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:news,announcement,activity',
            'published_at' => 'nullable|date',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'type' => $request->type,
            'published_at' => $request->published_at,
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => $request->boolean('is_active'),
        ];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($socialContent->image_path) {
                Storage::disk('public')->delete($socialContent->image_path);
            }
            
            $data['image_path'] = $request->file('image')->store('social-contents', 'public');
        }

        $socialContent->update($data);

        return redirect()->route('admin.social-contents.index')
                        ->with('success', 'Social content updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialContent $socialContent)
    {
        // Delete image file if exists
        if ($socialContent->image_path) {
            Storage::disk('public')->delete($socialContent->image_path);
        }
        
        $socialContent->delete();

        return redirect()->route('admin.social-contents.index')
                        ->with('success', 'Social content deleted successfully.');
    }
}
