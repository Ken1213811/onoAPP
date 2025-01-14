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
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'そよそよ',
            'description'=>'風が静かに心地よく吹く様子',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'ハラハラ',
            'description'=>'危険な状況を見て、悪いことや大変なことが起きないか心配する様子',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('onomatopes')->insert([
            'name'=>'ソワソワ',
            'description'=>'気持ちや態度が落ち着かない様子',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
