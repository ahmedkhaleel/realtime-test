<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\like;
use App\Models\Question;
use App\Models\Reply;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
       User::factory(10)->create();
       Category::factory(10)->create();
       Question::factory(5)->create();
       Reply::factory(50)->create()->each(function($reply){
           return $reply->Like()->save(like::factory(10)->make());
       });




    }
}
