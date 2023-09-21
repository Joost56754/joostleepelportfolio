<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Event 1',
            'description' => 'Dit is een test',
            'image' => 'img/Int.jpg',
            'category_id' => 1,
        ]);
        Project::create([
            'title' => 'Event 1',
            'description' => 'Dit is een test',
            'image' => 'img/zal.jpg',
            'category_id' => 2,
        ]);
        Project::create([
            'title' => 'Event 1',
            'description' => 'Dit is een test',
            'image' => 'img/bolcom.jpg',
            'category_id' => 3,
        ]);
        Project::create([
            'title' => 'Event 1',
            'description' => 'Dit is een test',
            'image' => 'img/Jam.jpg',
            'category_id' => 3,
        ]);
    }
}
