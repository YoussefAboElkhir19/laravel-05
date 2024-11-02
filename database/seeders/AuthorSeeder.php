<?php

namespace Database\Seeders;


use App\Models\Author;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Author::factory()->create([
            'name' => "Nagibe Mahfoz",
            'yob' => '2005-02-01',  // Using a consistent date format
            'date' => '1900',
        ]);
        }
}
