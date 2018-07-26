<?php

use Illuminate\Database\Seeder;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 1; $i < $limit; $i++) {
            for($j = 0 ; $j < 5 ; $j++){
                DB::table('book_category')->insert([
                    'category_id' => $faker->numberBetween(1,10),
                    'book_id' => $i
                ]);
            }
        }
    }
}
