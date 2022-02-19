<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Bill::factory(20)->create();

//        $faker = \Faker\Factory::create();
//        DB::table("bills")->insert([
//            "name" => $faker->name(),
//        ]);
    }
}