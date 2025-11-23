<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:tags,name',
        ]);

        $tag = new Tag;
        $tag->name = $request->input('name');
        $tag->save();

        return redirect()->back()->with('success', 'Tag created successfully.');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:50|unique:tags,name,' . $id,
        ]);

        $tag = Tag::findOrFail($id);
        $tag->name = $request->input('name');
        $tag->save();

        return redirect('/dashboard')->with('success', 'Tag updated successfully');
    }

    public function destroy($id) {
        $tag = Tag::findOrFail($id);
        
        $tag->delete();
        return redirect('/dashboard')->with('success', 'Tag deleted successfully');
    }
}
