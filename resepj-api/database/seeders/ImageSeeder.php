<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = Shop::pluck('id')->all();
        $param = [
            'shop_id' => $shops[0],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[1],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[2],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[3],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[4],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[5],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[6],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[7],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[8],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[9],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[10],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[11],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[12],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[13],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[14],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[15],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[16],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[17],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[18],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => $shops[19],
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
    }
}
