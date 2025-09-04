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
            'password' => bcrypt('agaksusah'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Librarian',
            'username' => 'librarian',
            'password' => bcrypt('password'),
            'role' => 'librarian',
        ]);
        User::create([
            'name' => 'Siswa',
            'username' => 'Siswa',
            'password' => bcrypt('siswa123'),
            'role' => 'user',
        ]);
    }
}
