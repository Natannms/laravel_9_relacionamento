<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Natan Martins',
            'email' => 'agnusnat.nms@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        //Post Seeders
        \App\Models\Post::factory(10)->create();
    }
}
