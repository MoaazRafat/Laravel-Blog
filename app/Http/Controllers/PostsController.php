<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('blog.index')->with('posts', Post::with('user')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // 'image' => 'required|memes:jpg,png,jpeg|max:5048',
        // ]);
        // $slug = strtolower(str_replace(" ", "-", $request->title));
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => "\\images\\" . $newImageName,
            'slug' => $slug,
        ]);
        return redirect('blog');
        // dd($slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $slug = Str::slug($request->title, '-');
        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        Post::where('slug', $slug)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => "\\images\\" . $newImageName,
            'slug' => $slug,
        ]);
        return redirect('blog/' . $slug)->with('message', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('blog')->with('message', 'Post Deleted');;
    }
}
