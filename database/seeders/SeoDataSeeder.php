<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Ленточные пилы Европейского качества",
                'seo_description' => "Производство и поставка ленточных пил высочайшего качества Holsfaller",
                'page_title' => "",
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],

        ];

        DB::table("seo_data")->insert($data);
    }
}
