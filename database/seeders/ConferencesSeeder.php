<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'time' => "2023-09-30",
                'adress' => "aabbbccc",
                'members' => "2"
            
            ],
            [
                'title' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'time' => "2023-09-30",
                'adress' => "aabbbccc",
                'members' => "2"

            ]
        ]);
    }
}
