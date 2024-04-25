<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    // This method will show posts page
    public function index() {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('posts.home', [
            'posts' => $posts
        ]);
    }

    // This method will store a post in the data-base
    public function store(Request $request) {
        $rules = [
            'title' => 'required|min:3'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/dashboard')->withInput()->withErrors($validator);
        }

        // Here we will insert post in db
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        // if an img is upload :
        if ($request->image != "") {

            // Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            // Save img to the directory
            $image->move(public_path('uploads/img'), $imageName);

            // Save image name in the db
            $post->image = $imageName;
            $post->save();
        }
        return redirect('/dashboard')->with('success', 'Post added successfully');
    }

    // This method will shwo edit post page
    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    // This method will update a post
    public function update($id, Request $request) {
        $post = Post::findOrFail($id);
        $rules = [
            'title' => 'required|min:3'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('posts.edit', $post->id)->withInput()->withErrors($validator);
        }

        // Here we will update post in db
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        // if an img is upload :
        if ($request->image != "") {
            // delete old image
            File::delete(public_path('uploads/img/'.$post->image));

            // Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            // Save img to the directory
            $image->move(public_path('uploads/img'), $imageName);

            // Save image name in the db
            $post->image = $imageName;
            $post->save();
        }
        return redirect('/dashboard')->with('success', 'Post updated successfully');
    }

    // This method will delete a post
    public function destroy($id) {
        $post = Post::findOrFail($id);

        // delete image
        File::delete(public_path('uploads/img/'.$post->image));

        // delete post from db
        $post->delete();
        return redirect('/dashboard')->with('success', 'Post deleted successfully');
    }
}
