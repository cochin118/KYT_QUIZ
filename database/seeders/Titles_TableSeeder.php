<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \App\Models\Title;

class Titles_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            [
                'title' => '手洗い時のKYT問題集',
                'description' => '手指衛生の危険予知問題集です。',
            ],
            [
                'title' => '入浴介助時のKYT問題集',
                'description' => '入浴介助時の危険予知問題集です。',
            ],
            [
                'title' => '患者搬送時のKYT問題集',
                'description' => '患者搬送時の危険予知問題集です。',
            ],
        ];

        //一括登録
        foreach($titles as $title) {
            Title::create($title);
        }
    }
}