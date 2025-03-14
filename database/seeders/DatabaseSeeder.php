<?php

namespace Database\Seeders;

//we import our models from the App\Models directory
use App\Models\Article;
use App\Models\Comment;
use App\Models\Keyword;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Sergi Laurent',
            'email'=>'sergilaurents@gmail.com',
            'password'=>Hash::make('password'),
            'is_admin'=>true,
            ]);

       User::factory(count:10)->create();
       $articles = Article::factory(count:10)->create();
       Comment::factory(count:25)->create();
       
       Keyword::factory(count:5)->create();

       //add keywords to articles
       foreach($articles as $article){
        $random_number = random_int(1,3);
        $keywords = Keyword::inRandomOrder()->take($random_number)->get();
        $article->keywords()->attach($keywords);
       }
    }
}
