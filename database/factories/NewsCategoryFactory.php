<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsCategoryFactory extends Factory
{

    protected $model = NewsCategory::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 400, $height = 250),
        ];
    }
}
