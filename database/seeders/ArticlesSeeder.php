<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        (new Article())->insert([
            [
                'title' => Lorem::sentence(5),
                'content' => Lorem::text()
            ],
            [
                'title' => Lorem::sentence(5),
                'content' => Lorem::text()
            ]
        ]);
    }
}
