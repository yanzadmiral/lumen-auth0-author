<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // $this->call('UsersTableSeeder');

        for ($i=0; $i < 10; $i++) { 
            DB::table('authors')->insert([
                'id' => $faker->unique()->randomDigit,
                'name' => $faker->name,
                'email' => $faker->email,
                'github' => $faker->userName,
                'twitter' => $faker->userName,
                'location' => $faker->streetAddress,
                'latest_article_published' => \Carbon\Carbon::now(),
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);   
        }

    }
}
