<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'images' => 'image_value_1',
                'icon' => 'icon_value_1',
                'category_id' => 1,
                'svg_code' => 'svg_code_value_1',
                'button' => 'button_value_1',
                'button_text' => 'button_text_value_1',
            ],
            [
                'images' => 'image_value_2',
                'icon' => 'icon_value_2',
                'category_id' => 2,
                'svg_code' => 'svg_code_value_2',
                'button' => 'button_value_2',
                'button_text' => 'button_text_value_2',
            ],
            // Add more data as needed.
        ];

        DB::table('api_models')->insert($data);

    }
}
