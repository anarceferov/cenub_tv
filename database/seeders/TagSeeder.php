<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['texnologiya' , 'saglamliq' , 'idman' , 'siyaset' , 'din' , 'tehsil' , 'neqliyyat'];
        foreach ($tags as $tag){
            DB::table('cb_tags')->insert([
                'name' => $tag,
                'news_id' => rand(1,7)
            ]);
        }
    }
}
