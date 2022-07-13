<?php

namespace App\Http\Controllers\Paw;

use App\Models\Tag;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{


    public function table (){
     

        $artikels = Auth::user()->artikels()->latest()->paginate(12);
      
        return view('artikels.table', compact('artikels'));
    }
    public function create() {
        
        return view('artikels.create', [
            'tags' => Tag::get(),
            'artikel' => new Artikel(),
        ]);
    }

    public function store(ArtikelRequest $request) {

       
        $artikel = Auth::user()->artikels()->create([
            'judul' => $request->judul,
            'gambar_artikel' => $request->file('gambar_artikel')->store('images/artikel'),
            'slug' => Str::slug($request->judul . '-' . Str::random(6)),
            'body' => $request->body,
             'views' => 0
 
 
        ]);
    
 
        $artikel->tags()->sync(request('tags'));
    
        return redirect(route('artikels.table'));
    }

    public function edit(Artikel $artikel) {
        $this->authorize('alls', $artikel);

        return view('artikels.edit',  [
            'artikel' => $artikel,
            'tags' => Tag::get(),

        ]);
    }

    public function update (Artikel $artikel, ArtikelRequest $request) {
        $this->authorize('alls', $artikel);

        if ($request->gambar_artikel) {
            Storage::delete($artikel->gambar_artikel);
            $gambar_artikel =  $request->file('gambar_artikel')->store('images/artikel');
        }else {
            $gambar_artikel = $artikel->gambar_artikel;
        }

        $gambar_artikel = $request->gambar_artikel ? $request->file('gambar_artikel')->store('images/playlists') : $artikel->gambar_artikel;
        
   
       $artikel->update([
            'judul' => $request->judul,
            'gambar_artikel' => $gambar_artikel,
            'slug' => Str::slug($request->judul . '-' . Str::random(6)),
            'body' => $request->body,
        ]);
        $artikel->tags()->sync(request('tags'));
        return redirect(route('artikels.table'));

        
    }

    public function destroy(Artikel $artikel) {
        $this->authorize('alls', $artikel);
        Storage::delete($artikel->gambar_artikel);
        $artikel->tags()->detach();
        $artikel->delete();
      
      
        return redirect(route('artikels.table'));
    }
}
