<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
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
            DB::table('publisher')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => 'assets/publisher_'.mt_rand(1,4).'.jpg',
            ]);
            
        }
    }
}
