<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Artikel;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index () {

        $artikel = Artikel::latest()->paginate(14);
        $trending = Artikel::orderByDesc('views')->limit(4)->get();
        $tags = Tag::all();
    
        return view('index', [
            'artikels' => $artikel,
            'trending' => $trending,
            'tags' => $tags

        ]);
    }

    public function single(Artikel $artikel) {

       $artikel->increment('views');

        $trending = Artikel::orderByDesc('views')->limit(4)->get();
        return view('single', [
            'artikel' => $artikel,
            'artikels' => $artikel,
            'tags' => Tag::get(),

            'trending' => $trending
        ]);
    }

    public function tags_single(Tag $tag) {
       
        $trending = Artikel::orderByDesc('views')->limit(4)->get();

        $data = $tag->artikels()->latest()->paginate(14);      

    
        return view('tag', [
          'artikels' => $data,

          'trending' => $trending,
          'tags' => Tag::get(),
          'tag' => $tag
          
        ]);
    }

    public function search(Request $request) {
        $data = $request->cari;
        $trending = Artikel::orderByDesc('views')->limit(4)->get();


        $query = Artikel::where('judul', 'LIKE', '%'.$data.'%')->paginate(12);

        return view('search', [
            'artikels' => $query,
            'tags' => Tag::get(),
            'trending' => $trending,
        ]);
    }
}
