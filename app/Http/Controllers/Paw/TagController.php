<?php

namespace App\Http\Controllers\Paw;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function create() {
        return view('tags.create', [
            'tag' => new Tag(),
        ]);
    }

    public function store(TagRequest $request) {
       
        

        Tag::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            ]);

            return redirect(route('tags.table'));
    }

    public function table () {
        $tag = Tag::latest()->paginate(10);
        return view ('tags.table', ['tag' => $tag]);
    }

    public function edit(Tag $tag) {
        return view('tags.edit',['tag' => $tag]);
    }
    public function update(TagRequest $request, Tag $tag) {

        $tag->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);

        return redirect(route('tags.table'));
    }

    public function destroy (Tag $tag) {
        
        $tag->delete();

        return redirect(route('tags.table'));
    
    }


    
}
