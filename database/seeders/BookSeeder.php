<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
 'title' => 'Pemrograman PHP',
 'author' => 'Andi',
 'year' => 2024,
 'stock' => 5,
]);

Book::create([
 'title' => 'Pemrograman Laravel',
 'author' => 'Budi',
 'year' => 2024,
 'stock' => 3,
]);

Book::create([
 'title' => 'hujan',
 'author' => 'paraj',
 'year' => 2024,
 'stock' => 5,
]);

Book::create([
 'title' => 'dillan',
 'author' => 'aguss',
 'year' => 2021,
 'stock' => 2,
]);

Book::create([
 'title' => 'kisa h cinta',
 'author' => 'syahrul',
 'year' => 2023,
 'stock' => 3,
]);
    }
    
}
