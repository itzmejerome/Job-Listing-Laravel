<?php

namespace Database\Seeders;

use App\Models\Joblists;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Joblists::factory(6)->create();

        // Joblists::create([
        //     'title' => 'Web developer',
        //     'tags' => implode(', ', ['Developer', 'web design']), 
        //     'company' => 'Syantactics Corp',
        //     'location' => 'Cagayan',
        //     'emails' => 'HR@GMAIL.COM',
        //     'website' => 'https://www.syantactics.com',
        //     'description' => 'This is a developer company'
        // ]);
        // Joblists::create([
        //     'title' => 'Web developer2',
        //     'tags' => implode(', ', ['Developer2', 'web design2']), 
        //     'company' => 'Syantactics Corp2',
        //     'location' => 'Cagayan2',
        //     'emails' => 'HR@GMAIL.COM2',
        //     'website' => 'https://www.syantactics2.com',
        //     'description' => 'This is a developer company2'
        // ]);
    }
}
