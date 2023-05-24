<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $fake_category = array('Horror', 'Romance', 'Comedy', 'Action');

        for ($i = 0; $i < 4; $i++) {
            DB::table('categories')->insert([
                'name' => $fake_category[$i]
            ]);
        }
    }
}
