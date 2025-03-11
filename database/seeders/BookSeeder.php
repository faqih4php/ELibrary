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
            'categories_id' => 5,
            'description' => 'Buku ini sangat bagus untuk pembaca yang suka genre action',
            'cover' => 'solo-leveling.jpg'
        ]);
        
        Book::create([
            'title' => 'The Beginning After The End',
            'author' => 'Arthur Leywin',
            'categories_id' => 6,
            'description' => 'Buku ini sangat bagus untuk pembaca yang suka genre fantasy',
            'cover' => 'the-beginning-after-the-end.jpg'
        ]);
        
        Book::create([
            'title' => 'The Extra`s Academy Survival Guide',
            'author' => 'Ed Rothaylor',
            'categories_id' => 1,
            'description' => 'Buku ini sangat bagus untuk pembaca yang suka genre romance',
            'cover' => 'the-extra-s-academy-survival-guide.jpg'
        ]);

    }
}
