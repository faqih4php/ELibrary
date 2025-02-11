<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Solo Leveling',
            'author' => 'Sung Jinwoo',
            'categories_id' => 5
        ]);
        
        Book::create([
            'title' => 'The Beginning After The End',
            'author' => 'Arthur Leywin',
            'categories_id' => 6
        ]);
        
        Book::create([
            'title' => 'The Extra`s Academy Survival Guide',
            'author' => 'Ed Rothaylor',
            'categories_id' => 1
        ]);

    }
}
