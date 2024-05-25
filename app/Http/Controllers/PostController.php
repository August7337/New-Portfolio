<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class PostController extends Controller
{
    // This method will show posts page
    public function index() {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('posts.home', [
            'posts' => $posts
        ]);
    }

    public function show($url) {
        $post = Post::where('url', $url)->firstOrFail();
        return view('posts.post', [
            'post' => $post
        ]);
    }

    // This method will store a post in the data-base
    public function store(Request $request) {
        $rules = [
            'title' => 'required|min:3',
            'url' => 'required'
        ];

        if ($request->thumbnail != "") {
            $rules['thumbnail'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/dashboard')->withInput()->withErrors($validator);
        }

        // Here we will insert post in db
        $post = new Post();
        $post->title = $request->title;
        $post->date = $request->date;
        $post->html = $request->input('editor');
        $post->url = $request->url;

        // if an img is upload :
        if ($request->thumbnail != "") {

            // Here we will store thumbnail
            $thumbnail = $request->thumbnail;
            $thumbnailName = 'thu'.'-'.time().'-'.$thumbnail->getClientOriginalName();

            // Create the 500 x 500 thumbnail
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('thumbnail'));
            $image = $image->cover(500, 500);
            $image->save(public_path('uploads/img/thumbnail/'.$thumbnailName));;
            
            // Save img to the directory
            $thumbnail->move(public_path('uploads/img'), $thumbnailName);

            // Save thumbnail name in the db
            $post->thumbnail = $thumbnailName;
            //$thumbnail->isValid()
            
        }
        $post->save();
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
            'title' => 'required|min:3',
            'url' => 'required'
        ];

        if ($request->thumbnail != "") {
            $rules['thumbnail'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('posts.edit', $post->id)->withInput()->withErrors($validator);
        }

        // Here we will update post in db
        $post->title = $request->title;
        $post->date = $request->date;
        $post->html = $request->input('editor');
        $post->url = $request->url;

        // if an img is upload :
        if ($request->thumbnail != "") {
            // delete old thumbnail
            File::delete(public_path('uploads/img/'.$post->thumbnail));

            // Here we will store thumbnail
            $thumbnail = $request->thumbnail;
            $thumbnailName = 'thu'.'-'.time().'-'.$thumbnail->getClientOriginalName();

            // Create the 500 x 500 thumbnail
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('thumbnail'));
            $image = $image->cover(500, 500);
            $image->save(public_path('uploads/img/thumbnail/'.$thumbnailName));;

            // Save img to the directory
            $thumbnail->move(public_path('uploads/img'), $thumbnailName);

            // Save thumbnail name in the db
            $post->thumbnail = $thumbnailName;
        }
        $post->save();
        return redirect('/dashboard')->with('success', 'Post updated successfully');
    }

    // This method will delete a post
    public function destroy($id) {
        $post = Post::findOrFail($id);

        // delete thumbnail
        File::delete(public_path('uploads/img/'.$post->thumbnail));
        File::delete(public_path('uploads/img/thumbnail/'.$post->thumbnail));

        // delete post from db
        $post->delete();
        return redirect('/dashboard')->with('success', 'Post deleted successfully');
    }
}
