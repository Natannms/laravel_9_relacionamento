<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => '', //provisorio até implementação de login e uso do ID autenticado
        ]);

        $file = $validated['image'];
        $path = $file->store('posts', 'public');

        $validated['image'] = $path;

        $post = Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }
    /**
     * Display the specified resource.
     *
     */
    public function show(Post $post)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
       $Post = Post::find($id);
       return view('posts.edit', compact('Post'));
    }
    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'string|max:255',
            'body' => 'string|max:255',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => '', //provisorio até implementação de login e uso do ID autenticado
        ]);
        $file = null;
        $Post = Post::find($id);
        //if image is not empty
        if($request->hasFile('image')){
            $file = $validated['image'];

            //delete old image form storage
            Storage::disk('public')->delete($Post->image);

            //upload new image to storage
            $path = $file->store('posts', 'public');

            $validated['image'] = $path;
        }

        //update post
       $Post->update($validated);

        return redirect()->back()->with('success', 'Post created successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Post $post)
    {
        //
    }
}
