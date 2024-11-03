<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            "name" => "Web Deisgn",
            "slug" => "Web-Deisgn",

        ]);
        Category::create([
            "name" => "Network",
            "slug" => "Network",

        ]);
        Category::create([
            "name" => "UI-UX",
            "slug" => "ui-ux",

        ]);
    }
}
