<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::insert([
            [
                'user_id'    => 1,
                'start_date' => '2025-05-05',
                'end_date'   => '2025-05-12',
                'title'      => 'フランス・パリ美術館巡り',
                'destination' => 'フランス・パリ',
            ],
            [
                'user_id'    => 1,
                'start_date' => '2025-06-15',
                'end_date'   => '2025-06-22',
                'title'      => 'イタリア・ローマ歴史探訪',
                'destination' => 'イタリア・ローマ',
            ],
            [
                'user_id'    => 1,
                'start_date' => '2025-07-25',
                'end_date'   => '2025-08-01',
                'title'      => 'アメリカ・ニューヨークシティ観光',
                'destination' => 'アメリカ・ニューヨーク',
            ],
            [
                'user_id'    => 1,
                'start_date' => '2025-09-01',
                'end_date'   => '2025-09-08',
                'title'      => 'カナダ・バンクーバー自然満喫旅',
                'destination' => 'カナダ・バンクーバー',
            ],
            [
                'user_id'    => 1,
                'start_date' => '2025-10-10',
                'end_date'   => '2025-10-17',
                'title'      => 'スペイン・バルセロナツアー',
                'destination' => 'スペイン・バルセロナ',
            ],
            [
                'user_id'    => 2,
                'start_date' => '2025-11-05',
                'end_date'   => '2025-11-12',
                'title'      => 'イタリア・ローマ遺跡巡りの旅',
                'destination' => 'イタリア',
            ],
        ]);
    }
}
