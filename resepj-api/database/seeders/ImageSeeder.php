<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 4,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 14,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 24,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 34,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 44,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 54,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 64,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 74,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 84,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 94,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 104,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 114,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 124,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 134,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 144,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 154,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 164,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 174,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 184,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 194,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
    }
}
