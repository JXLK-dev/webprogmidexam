<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::factory(10)->create();
        DB::table('categories')->insert([
            'name' => 'Category 1',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 2',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 3',
        ]);
        DB::table('categories')->insert([
            'name' => 'Category 4',
        ]);
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'test',
            'author' => 'jojon',
            'year' => 2020,
            'synopsis' => 'This is the end',
            'image' => 'image/books/book.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'test',
            'author' => 'jojon',
            'year' => 2020,
            'synopsis' => 'This is the end',
            'image' => 'image/books/book.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id' => '1',
            'title' => 'test',
            'author' => 'jojon',
            'year' => 2020,
            'synopsis' => 'This is the end',
            'image' => 'image/books/book.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id' => '2',
            'title' => 'test',
            'author' => 'jojon',
            'year' => 2020,
            'synopsis' => 'This is the end',
            'image' => 'image/books/book.jpg'
        ]);
        DB::table('book_category')->insert([
            'category_id' => '1',
            'book_id' => '1'
        ]);
        DB::table('book_category')->insert([
            'category_id' => '1',
            'book_id' => '2'
        ]);
        DB::table('book_category')->insert([
            'category_id' => '1',
            'book_id' => '3'
        ]);
        DB::table('book_category')->insert([
            'category_id' => '1',
            'book_id' => '4'
        ]);
        DB::table('publishers')->insert([
            'name' => 'joji',
            'address' => 'Binus Alsut',
            'phone' => '08123456789',
            'email' => 'joji@gmail.com',
            'image' => 'image/publishers/publisher.jpg'
        ]);
        DB::table('publishers')->insert([
            'name' => 'joni',
            'address' => 'Binus Alsut',
            'phone' => '08123456789',
            'email' => 'joni@gmail.com',
            'image' => 'image/publishers/publisher.jpg'
        ]);
    }
}
