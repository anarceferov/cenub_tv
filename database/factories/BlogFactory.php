<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        $title = $this->faker->sentence(3);

        return [
            'image' => $this->faker->imageUrl($width = 400, $height = 250),
            'title' => $title,
            'content' => $this->faker->sentence(10),
            'slug' => Str::slug($title),
            'tarix' => now(),
        ];
    }
}
