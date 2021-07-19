<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{

    protected $model = News::class;

    public function definition()
    {
        $title = $this->faker->sentence(3);

        return [
            'image' => $this->faker->imageUrl($width = 400, $height = 250),
            'title' => $title,
            'content' => $this->faker->sentence(10),
            'slug' => Str::slug($title),
            'cb_news_categories_id' => rand(1,7)
        ];
    }
}
