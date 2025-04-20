<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Memo;

class MemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Memo::insert([
            [
                'trip_id' => 1,
                'user_id' => 1,
                'title'   => 'パリの定番観光地',
                'content' => 'エッフェル塔、凱旋門、シャンゼリゼ通りを巡る予定'
            ],
            [
                'trip_id' => 1,
                'user_id' => 1,
                'title'   => 'パリの美術館',
                'content' => 'ルーヴル美術館とオルセー美術館を見学予定'
            ],
            [
                'trip_id' => 1,
                'user_id' => 1,
                'title'   => 'パリのグルメ',
                'content' => 'クロワッサン、エスカルゴ、フレンチディナーを楽しむ'
            ],
            [
                'trip_id' => 1,
                'user_id' => 1,
                'title'   => 'パリの夜景',
                'content' => 'セーヌ川ディナークルーズとエッフェル塔のライトアップ'
            ],
            [
                'trip_id' => 1,
                'user_id' => 1,
                'title'   => 'パリのお土産',
                'content' => 'マカロン、ワイン、エッフェル塔グッズなどを購入予定'
            ],
            [
                'trip_id' => 6,
                'user_id' => 2,
                'title'   => 'ローマの歴史スポット',
                'content' => 'コロッセオ、フォロ・ロマーノ、トレヴィの泉を訪問予定'
            ],
        ]);
    }
}
