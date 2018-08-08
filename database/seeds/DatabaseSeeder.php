<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(RateBooksTable::class);
        $this->call(Cat_BookTableSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(PromotionTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);
    }
}
