<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Book extends \Faker\Provider\Base
{
  public function title($nbWords = 5)
  {
    $sentence = $this->generator->sentence($nbWords);
    return substr($sentence, 0, strlen($sentence) - 1);
  }

  public function ISBN()
  {
    return $this->generator->ean13();
  }
}

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $faker->addProvider(new \Faker\Provider\en_US\Company($faker));
        $faker->addProvider(new Book($faker));

        for ($i = 0; $i < 63; $i++) {
            DB::table('books')->insert([
                'publisher_id' => mt_rand(1,63),
                'title' => $faker->title,
                'author' => $faker->name,
                'year' => $faker->year,
                'synopsis' => $faker->text,
                'image' => 'assets/book_'.mt_rand(1,4).'.jpg',
            ]);
            
        }

    }
}
