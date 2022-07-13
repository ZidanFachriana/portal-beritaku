<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect([
            'Progamming', 'Teknologi', 'Kesehatan', 'Gaya Hidup', 'Wisata', 'Travelling', 'Politik', 'Indonesia'


        ]);

        $tags->each(function ($tag) {
            Tag::create([
                'nama' => $tag,
                'slug' => Str::slug($tag),
            ]);

        });
    }
}
