<?php

namespace Database\Seeders;

//we import our models from the App\Models directory
use App\Models\Article;
use App\Models\Comment;
use App\Models\Keyword;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(count:10)->create();
       Article::factory(count:10)->create();
       Comment::factory(count:25)->create();
       Keyword::factory(count:10)->create();
    }
}
