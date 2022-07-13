<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'judul', 'slug', 'gambar_artikel', 'body', 'views', 'user_id'
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function getPictureAttribute() {
        return asset('storage/' . $this->gambar_artikel);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getJuduleAttribute() {
        return Str::words($this->judul, '12');
    }

    public function getBodyneAttribute() {
        return Str::words($this->body, '30');
    }
}
