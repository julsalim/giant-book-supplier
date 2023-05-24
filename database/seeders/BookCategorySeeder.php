<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;




class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $faker->addProvider(new \Faker\Provider\en_US\Company($faker));

        for ($i = 0; $i < 63; $i++) {
            $done = array();
            for ($j = 0; $j < rand(1,3); $j++) {
                $category = rand(1,4);
                if (in_array($category, $done)) {
                    $j--;
                    continue;
                };
                array_push($done, $category);
                DB::table('book_categories')->insert([
                    'book_id' => $i+1,
                    'category_id' => $category,
                ]);
            }
        }
    }
}
