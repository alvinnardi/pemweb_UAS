<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Favorit;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Favorit::factory(20)->create();
        Category::create([
            'name' => 'Daging',
            'slug' => 'daging',
            'image' => 'category-images/1.jpg'
        ]);
        Category::create([
            'name' => 'Sup',
            'slug' => 'sup',
            'image' => 'category-images/2.jpg'
        ]);
        Category::create([
            'name' => 'Ayam',
            'slug' => 'ayam',
            'image' => 'category-images/3.jpg'
        ]);
        Category::create([
            'name' => 'Ikan',
            'slug' => 'ikan',
            'image' => 'category-images/4.jpg'
        ]);
        Category::create([
            'name' => 'Sambal',
            'slug' => 'sambal',
            'image' => 'category-images/5.jpg'
        ]);
        Category::create([
            'name' => 'Tahu-Tempe',
            'slug' => 'tahu-tempe',
            'image' => 'category-images/6.jpg'
        ]);
        Category::create([
            'name' => 'Telur',
            'slug' => 'telur',
            'image' => 'category-images/7.jpg'
        ]);
        Category::create([
            'name' => 'Nasi',
            'slug' => 'nasi',
            'image' => 'category-images/8.jpg'
        ]);
        Post::factory(40)->create();
    }
}
