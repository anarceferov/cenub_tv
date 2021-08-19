<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{

    public function run()
    {
        $users      = ['user-index', 'user-create', 'user-store', 'user-edit', 'user-update', 'user-destroy'];
        $categories = ['category-index', 'category-create', 'category-store', 'category-edit', 'category-update', 'category-destroy'];
        $news       = ['news-index', 'news-create', 'news-store', 'news-edit', 'news-update', 'news-destroy'];
        $reklams    = ['reklam-index', 'reklam-create', 'reklam-store', 'reklam-edit', 'reklam-update', 'reklam-destroy'];


        foreach ($categories as $category) {
            DB::table('permissions')->insert([
                'name' => $category,
                'guard_name' => 'web'
            ]);
        }

        foreach ($news as $new) {
            DB::table('permissions')->insert([
                'name' => $new,
                'guard_name' => 'web'
            ]);
        }

        foreach ($reklams as $reklam) {
            DB::table('permissions')->insert([
                'name' => $reklam,
                'guard_name' => 'web'
            ]);
        }

        foreach ($users as $user) {
            DB::table('permissions')->insert([
                'name' => $user,
                'guard_name' => 'web'
            ]);
        }
    }
}
