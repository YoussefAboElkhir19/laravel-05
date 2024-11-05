<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Language;
use App\Models\Topic;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'youssef essam',
        //     'mobile' => '01143752219',
        //     'email' => 'essamy688@gmail.com',
        //     'password' => Hash::make('password'),
        //     'roles' => 'admin',



        // ]);

        // // Author
        // Author::factory(100)->create();


        // Topic
        // Topic::factory()->count(100)->create();

        // // Languages
        // $languages = [
        //     'Arabic',
        //     'English',
        //     'Germmany',
        //     'Italy'
        // ];
        // foreach ($languages as $language) {

        //     Language::create([
        //         'lang' => $language
        //     ]);
        // }
        // // User
        // User::factory(100)->create();


        // Books
        Book::factory(100)->create();
    }
}
