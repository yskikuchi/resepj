<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;

class CapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 1,
            'number_of_seats' => 50,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 2,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 3,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 4,
            'number_of_seats' => 80,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 5,
            'number_of_seats' => 50,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 6,
            'number_of_seats' => 120,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 7,
            'number_of_seats' => 60,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 8,
            'number_of_seats' => 50,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 9,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 10,
            'number_of_seats' => 50,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 11,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 12,
            'number_of_seats' => 130,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 13,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 14,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 15,
            'number_of_seats' => 130,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 16,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 17,
            'number_of_seats' => 60,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 18,
            'number_of_seats' => 100,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 19,
            'number_of_seats' => 70,
        ];
        DB::table('capacities')->insert($param);
        $param = [
            'shop_id' => 20,
            'number_of_seats' => 40,
        ];
        DB::table('capacities')->insert($param);
    }
}
