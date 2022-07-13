<?php

namespace App\Models;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tag';
    protected $guarded = [];

    public function artikels () {
        return $this->BelongsToMany(Artikel::class);
    }

}
