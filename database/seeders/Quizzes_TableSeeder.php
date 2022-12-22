<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \App\Models\Quiz;

class Quizzes_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizzes = [
            [
                'name' => '手指衛生1',
                'pictures' => 'tearai.jpg',
                'answer1' => '手の甲まで洗う',
                'answer2' => '洗い残しがあるといけないので洗剤は使わない',
                'answer3' => '手首まで洗う',
                'answer4' => '爪の間まで洗う',
                'answer' => 2,
                'description' => '手にはとても多くの細菌が付着しています。
                                 洗剤を使う事で99%の細菌を除去することが出来ます。'
            ],
            [
                'name' => '手指衛生2',
                'pictures' => 'tearai.jpg',
                'answer1' => '洗い残しは爪が一番多い',
                'answer2' => '洗い残しは手首が一番多い',
                'answer3' => '洗い残しは手の甲が一番多い',
                'answer4' => '洗い残しは手のひらが一番多い',
                'answer' => 1,
                'description' => '洗い残しは爪が一番多い事がわかっています。より意識的に洗いましょう'
            ],
            [
                'name' => '手指衛生3',
                'pictures' => 'tearai.jpg',
                'answer1' => '手を洗った後はアルコールをしなくてよい',
                'answer2' => '手を洗った後もこまめにアルコール除菌を行う',
                'answer3' => '人との接触があった後はできるだけ手を洗う',
                'answer4' => '感染の多くは手を介している',
                'answer' => 1,
                'description' => '手洗いで一番大事なのはこまめに手を洗う事と除菌をする事です。心がけましょう。'
            ],
            [
                'name' => '手指衛生4',
                'pictures' => 'tearai.jpg',
                'answer1' => 'アルコール除菌でも意識的に行う必要がある',
                'answer2' => '除菌には15秒乾かす時間がいる',
                'answer3' => '1~8までの手順を踏むことが最も効果的',
                'answer4' => 'アルコールはかければすぐ除菌される',
                'answer' => 4,
                'description' => 'アルコール除菌も手洗いと同じく洗い残しの多い爪や手首などを洗う事が大切です。'
            ],
            [
                'name' => '手指衛生5',
                'pictures' => 'tearai.jpg',
                'answer1' => '清潔な布で手を拭く',
                'answer2' => '清潔な紙で水分を拭き取る',
                'answer3' => 'タオルは使いまわしてもよい',
                'answer4' => '自然乾燥はしてはならい',
                'answer' => 3,
                'description' => '水分を拭きとる際にも注意をする必要があります。'
            ],
        ];

        //一括登録
        foreach($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}