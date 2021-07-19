<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsCategoriesSeeder extends Seeder
{

    public function run()
    {
        $newsCategories = ['texnologiya' , 'saglamliq' , 'idman' , 'siyaset' , 'din' , 'tehsil' , 'neqliyyat'];
        foreach ($newsCategories as $newsCategory){
            DB::table('cb_news_categories')->insert([
                'name' => $newsCategory,
                'color' => "red",
                'slug' => str::slug($newsCategory),
            ]);
        }
    }
}
