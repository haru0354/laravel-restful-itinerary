<?php

namespace Database\Seeders;

use App\Models\Itinerary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Itinerary::insert([
            [
                'trip_id'        => 1,
                'user_id'        => 1,
                'date_and_time'  => '2025-05-05 10:00:00',
                'title'          => 'パリ到着',
                'content'        => 'シャルル・ド・ゴール空港に到着し、市内へ移動',
                'hide_content'   => 'ホテルにチェックイン',
                'image_url'      => '',
                'image_alt'      => ''
            ],
            [
                'trip_id'        => 1,
                'user_id'        => 1,
                'date_and_time'  => '2025-05-05 13:00:00',
                'title'          => 'エッフェル塔見学',
                'content'        => 'セーヌ川沿いを散策しながらエッフェル塔へ',
                'hide_content'   => '展望台からパリ市内を一望',
                'image_url'      => '',
                'image_alt'      => ''
            ],
            [
                'trip_id'        => 1,
                'user_id'        => 1,
                'date_and_time'  => '2025-05-05 19:00:00',
                'title'          => 'セーヌ川ディナークルーズ',
                'content'        => '夜景を楽しみながらフレンチディナー',
                'hide_content'   => 'エッフェル塔のライトアップを撮影',
                'image_url'      => '',
                'image_alt'      => ''
            ],
            [
                'trip_id'        => 1,
                'user_id'        => 1,
                'date_and_time'  => '2025-05-06 10:00:00',
                'title'          => 'ルーヴル美術館',
                'content'        => 'モナリザや古代エジプト展示を鑑賞',
                'hide_content'   => '館内カフェで休憩',
                'image_url'      => '',
                'image_alt'      => ''
            ],
            [
                'trip_id'        => 1,
                'user_id'        => 1,
                'date_and_time'  => '2025-05-07 09:00:00',
                'title'          => 'モンマルトルの丘散策',
                'content'        => 'サクレ・クール寺院と街並みを楽しむ',
                'hide_content'   => 'アーティスト通りで似顔絵を描いてもらう',
                'image_url'      => '',
                'image_alt'      => ''
            ],
            [
                'trip_id'        => 6,
                'user_id'        => 2,
                'date_and_time'  => '2025-06-15 13:00:00',
                'title'          => 'ローマ到着',
                'content'        => 'フィウミチーノ空港からホテルへ移動',
                'hide_content'   => '近くのピッツェリアで夕食',
                'image_url'      => '',
                'image_alt'      => ''
            ],
        ]);
    }
}