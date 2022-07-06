<?php

namespace Database\Seeders;

use App\Models\Blog\Category as BlogCategory;
use App\Models\Shop\Category as ShopCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        // Clear images
        Storage::deleteDirectory('public');

        // Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ikuzounscripted.me',
        ]);
        $this->command->info('Admin user created.');

//        // Shop
//        $blogCategories = BlogCategory::factory()->count(20)->create();
//        $this->command->info('Blog categories created.');
//
//        $this->call([
//           UserSeeder::class
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
