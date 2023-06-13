<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Controllers\Controller;
use App\Models\Collaborator;
use App\Models\Technology;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $posts = Post::paginate(2);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $technologies = Technology::all();
        $collaborators = Collaborator::all();
        return view('admin.posts.create', compact('technologies', 'collaborators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     *
     */
    public function store(StorePostRequest $request)
    {
        $formData = $request->validated();
        $slug = Str::slug($request->title, '-');
        $formData['slug'] = $slug;
        if ($request->hasFile('image'))
        {
            $image_path = Storage::put('uploads', $request->image);
            $formData['image'] = asset('storage/' . $image_path);
        }
        $post = Post::create($formData);
        if ($request->has('collaborators'))
        {
            $post->collaborators()->attach($request->collaborators);
        }
        return redirect()->route('admin.posts.show', $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     *
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     *
     */
    public function edit(Post $post)
    {
        $technologies = Technology::all();
        $collaborators = Collaborator::all();
        return view('admin.posts.edit', compact('post', 'technologies', 'collaborators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     *
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $formData = $request->validated();
        $slug = Str::slug($request->title, '-');
        $formData['slug'] = $slug;
        if ($request->hasFile('image'))
        {
            $image_path = Storage::put('uploads', $request->image);
            $formData['image'] = asset('storage/' . $image_path);
        }
        $post->update($formData);
        if ($request->hasFile('collaborators'))
        {
            $post->collaborators()->sync($request->collaborators);
        }
        return redirect()->route('admin.posts.show', $post->slug)->with('message', 'The post has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     *
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('message', 'The post was deleted successfully!');
    }
}
