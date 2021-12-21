<?php

namespace Database\Seeders;

use App\Models\Quote;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1,5) as $i){
            Quote::create([
                "quote" => $faker->text,
            ]);
        }
    }
}
