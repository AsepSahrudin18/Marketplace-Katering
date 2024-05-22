<?php

namespace Database\Seeders\MarketplaceCatering;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();
        $menu = [
            [
                "id" => 1,
                "menu_name" => 'Ayam Bakar Sambal Ijo',
                "price" => "25000",
                "foto" => "sambal_ijo.png",
                "description" => "lorem ipsum dolor sit amet",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 2,
                "menu_name" => 'Ayam Bakar Sambal Ijo',
                "price" => "25000",
                "foto" => "sambal_ijo.png",
                "description" => "lorem ipsum dolor sit amet",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 3,
                "menu_name" => 'Ayam Bakar Sambal Ijo',
                "price" => "25000",
                "foto" => "sambal_ijo.png",
                "description" => "lorem ipsum dolor sit amet",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 4,
                "menu_name" => 'Ayam Bakar Sambal Ijo',
                "price" => "25000",
                "foto" => "sambal_ijo.png",
                "description" => "lorem ipsum dolor sit amet",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 5,
                "menu_name" => 'Ayam Bakar Sambal Ijo',
                "price" => "25000",
                "foto" => "sambal_ijo.png",
                "description" => "lorem ipsum dolor sit amet",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];
        DB::table('menus')->insert($menu);
    }
}
