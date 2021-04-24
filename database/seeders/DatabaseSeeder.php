<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\like;
use App\Models\Question;
use App\Models\Reply;
use App\Models\User;

use Database\Factories\LikeFactory;
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
       User::factory()->count(50)->create();
       Category::factory()->count(10)->create();
       Question::factory()->count(10)->create();
       Reply::factory()->count(50)->create()->each(function($reply){
           return $reply->like()->count(10)->save(Like::factory()->count(50)->make() );

       });




    }
}
