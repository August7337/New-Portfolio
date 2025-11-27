<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Tag;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use DOMDocument;

class PostController extends Controller
{
    // This method will show posts page
    public function index() {
        $posts = Post::where('draft', 0)
            ->orderBy('created_at', 'DESC')
            ->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('test', [
            'posts' => $posts,
            'tags' => $tags
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
            'url' => 'required|unique:posts,url',
            'thumbnail' => 'required|image'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('/dashboard')->withInput()->withErrors($validator);
        }

        // Create a folder where will be store the article images
        if (!File::exists('uploads/img/')) {
            File::makeDirectory(public_path('uploads/img/'));
        }
        if (!File::exists('uploads/img/thumbnail/')) {
            File::makeDirectory(public_path('uploads/img/thumbnail/'));
        }
        if (!File::exists('uploads/img/thumbnail/little/')) {
            File::makeDirectory(public_path('uploads/img/thumbnail/little/'));
        }
        if (!File::exists('uploads/img/not_attributed/')) {
            File::makeDirectory(public_path('uploads/img/not_attributed/'));
        }

        // Here we will insert post in db
        $post = new Post();
        $post->title = $request->title;
        $post->date = $request->date;
        $post->html = $request->input('editor');
        $post->url = $request->url;
        $post->draft = $request->has('isDraft');

        $lastPost = Post::max('id');
        $post->html = preg_replace(
            '/(src="[^"]*\/uploads\/img\/)not_attributed\//',
            '${1}' . $lastPost + 1 . '/',
            $post->html
        );

        // if an img is upload :
        if ($request->thumbnail != "") {

            // Here we will store thumbnail
            $thumbnail = $request->thumbnail;
            $thumbnailName = 'thu'.'-'.time().'-'.$thumbnail->getClientOriginalName();

            // Create Image Manager for resize thumbnail (intervention v3)
            $manager = new ImageManager(new Driver());
            $resized_thumbnail = $manager->read($request->file('thumbnail'));
            $resized_thumbnail->scaleDown(width: 720)->save(public_path('uploads/img/thumbnail/'.$thumbnailName));
            $resized_thumbnail->cover(500, 500)->save(public_path('uploads/img/thumbnail/little/'.$thumbnailName));

            // Save thumbnail name in the db
            $post->thumbnail = $thumbnailName;
        }
        $post->save();

        $post->tags()->sync($request->input('tags', []));

        // Create a folder where will be store the article images
        if (!File::exists('uploads/img/' . $post->id)) {
            File::makeDirectory(public_path('uploads/img/') . $post->id);
        }

        // search if an image isn't used, and delete it
        $imagePaths = $this->extractImagePaths($post->html);
        $this->cleanUpImages($imagePaths, $post->id);

        return redirect('/dashboard')->with('success', 'Post added successfully');
    }

    // This method will shwo edit post page
    public function edit($id) {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        return view('posts.edit', [
            'post' => $post,
            'tags' => $tags
        ]);
    }

    // This method will update a post
    public function update($id, Request $request) {
        $post = Post::findOrFail($id);
        $rules = [
            'title' => 'required|min:3',
            'url' => 'required|unique:posts,url,' . $id
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
        $post->draft = $request->has('isDraft');

        // if an img is upload :
        if ($request->thumbnail != "") {
            // delete old thumbnail
            File::delete(public_path('uploads/img/thumbnail/'.$post->thumbnail));
            File::delete(public_path('uploads/img/thumbnail/little/'.$post->thumbnail));

            // Here we will store thumbnail
            $thumbnail = $request->thumbnail;
            $thumbnailName = 'thu'.'-'.time().'-'.$thumbnail->getClientOriginalName();

            // Create Image Manager for resize thumbnail (intervention v3)
            $manager = new ImageManager(new Driver());
            $resized_thumbnail = $manager->read($request->file('thumbnail'));
            $resized_thumbnail->scaleDown(width: 720)->save(public_path('uploads/img/thumbnail/'.$thumbnailName));
            $resized_thumbnail->cover(500, 500)->save(public_path('uploads/img/thumbnail/little/'.$thumbnailName));

            // Save thumbnail name in the db
            $post->thumbnail = $thumbnailName;
        }
        $post->save();

        $post->tags()->sync($request->input('tags', []));

        $lastPost = Post::max('id');
        $post->html = preg_replace(
            '/(src="[^"]*\/uploads\/img\/)not_attributed\//',
            '${1}' . $post->id . '/',
            $post->html
        );
        $post->save();

        // search if an image isn't used, and delete it
        $imagePaths = $this->extractImagePaths($post->html);
        $this->cleanUpImages($imagePaths, $post->id);

        return redirect('/dashboard')->with('success', 'Post updated successfully');
    }

    // This method will delete a post
    public function destroy($id) {
        $post = Post::findOrFail($id);

        // delete thumbnail
        File::delete(public_path('uploads/img/thumbnail/'.$post->thumbnail));
        File::delete(public_path('uploads/img/thumbnail/little/'.$post->thumbnail));

        // delete article images
        File::deleteDirectory(public_path('uploads/img/' . $id . '/'));

        // delete post from db
        $post->delete();
        return redirect('/dashboard')->with('success', 'Post deleted successfully');
    }

    public function upload_image(Request $request)
    {
        $uploadedImage = $request->file('upload');

        $fileName = 'img'.'-'.time().'-'.$uploadedImage->getClientOriginalName();

        // Create Image Manager for resize image (intervention v3)
        $imageManager = new ImageManager(new Driver());
        $resizedImage = $imageManager->read($request->file('upload'));
        $resizedImage->scaleDown(width: 720)->save(public_path('uploads/img/not_attributed/'.$fileName));

        $url = asset('uploads/img/not_attributed/' . $fileName);

        return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
    }

    public function extractImagePaths($postHtml)
    {
        $dom = new DOMDocument();
        // load HTML
        libxml_use_internal_errors(true);
        $dom->loadHTML($postHtml);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        $imagePaths = [];

        // extract all src of <img>
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            $path = parse_url($src, PHP_URL_PATH);
            if (strpos($path, '/uploads/img/') === 0) {
                $imagePaths[] = basename($path);
            }
        }

        return $imagePaths;
    }

    public function cleanUpImages($imagePaths, $id)
    {
        $directory = public_path('uploads/img/not_attributed/');
        $destinationDirectory = public_path('uploads/img/' . $id . '/');
        $allFiles = File::files($directory);

        // Convert the extracted paths to an associative array for faster lookup
        $existingImages = array_flip($imagePaths);

        foreach ($allFiles as $file) {
            $filename = $file->getFilename();
            if (!isset($existingImages[$filename])) {
                // If the file is not in the list of image paths, delete it
                File::delete($directory . $filename);
            } else {
                File::move($directory . $filename, $destinationDirectory . $filename);
            }
        }
    }
}
