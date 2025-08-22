<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('qwe123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Librarian',
            'username' => 'librarian',
            'password' => bcrypt('password'),
            'role' => 'librarian',
        ]);
        User::create([
            'name' => 'User',
            'username' => 'user',
            'password' => bcrypt('qwe123'),
            'role' => 'user',
        ]);

        Book::create([
            'title' => 'Sample Book',
            'author' => 'John Doe',
            'category' => 'Fiction',
            'description' => 'This is a sample book description.',
            'published_date' => now(),
            'status' => 'available',
        ]);
    }
}
