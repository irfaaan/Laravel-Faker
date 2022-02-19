<?php

namespace Database\Factories;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
   
    public function definition()
    {
        return [
            "name" => $this->faker->name(),

        ];
    }
}