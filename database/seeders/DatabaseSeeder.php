<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Comment;
use App\Models\Photo;
use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(10)->create();
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
        Admin::factory()->count(10)->create();
        Category::factory()->count(10)->create();
        Product::factory()->count(50)->create();
        Photo::factory()->count(120)->create();
        Comment::factory()->count(100)->create();
    }
}
