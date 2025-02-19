<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use DataTime;

class OnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('onomatopes')->insert([
            'name'=>'きらきら',
            'description'=>'眩しく光る様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '7',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'そよそよ',
            'description'=>'風が静かに心地よく吹く様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '10',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'ハラハラ',
            'description'=>'危険な状況を見て、悪いことや大変なことが起きないか心配する様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '4',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'ソワソワ',
            'description'=>'気持ちや態度が落ち着かない様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '4',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'なみなみ',
            'description'=>'水やお酒などが液体が、容器からあふれるほどいっぱいである様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '2',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'コトコト',
            'description'=>'弱火で時間をかけて煮込む様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '7',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'くちゃくちゃ',
            'description'=>'口の中で物を噛むときの音',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '9',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'ゴクゴク',
            'description'=>'飲み物を飲む時に出る音',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '9',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'あつあつ',
            'description'=>'① 料理が出来立てで熱いこと
② カップル、夫婦が熱烈に愛し合っている様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '7',
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'もじゃもじゃ',
            'description'=>'毛や草が乱雑にたくさん生えている様子',
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => '7',
        ]);

        
        
    }
}
