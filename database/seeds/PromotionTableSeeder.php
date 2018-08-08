<?php

use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
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
            DB::table('promotions')->insert([
                'value' => $i * 10,
            ]);
        }
    }
}
