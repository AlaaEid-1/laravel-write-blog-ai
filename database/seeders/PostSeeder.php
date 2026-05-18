<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert([
            'name' => 'General',
            'slug' => 'general',
            'description' => 'General category for posts.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'slug' => 'first-post',
            'excerpt' => 'This is the excerpt of the first post.',
            'status' => 'published',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
      $categories = DB::table('categories')
        ->where('slug', 'general')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();

        dd($categories);
            DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => $categories[0]->id,
            'title' => 'Second Post',
            'content' => 'This is the content of the second post.',
            'slug' => 'second-post',
            'excerpt' => 'This is the excerpt of the second post.',
            'status' => 'published',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
