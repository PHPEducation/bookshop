<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Van hoc',
        ]);

        DB::table('categories')->insert([
            'name' => 'Khoa hoc',
        ]);

        DB::table('categories')->insert([
            'name' => 'Lich su',
        ]);

        DB::table('categories')->insert([
            'name' => 'Chinh tri',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dia ly',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kinh doanh',
        ]);

        DB::table('categories')->insert([
            'name' => 'Vien tuong',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tieu thuyet',
        ]);

        DB::table('categories')->insert([
            'name' => 'Thieu nhi',
        ]);

        DB::table('categories')->insert([
            'name' => 'Truyen tranh',
        ]);
    }
}
