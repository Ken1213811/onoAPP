<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => '食べもの🍙',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => '水・液体💧',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '痛み・感覚😣',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '気持ち😄',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '体💪',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '衣類👔',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '状態📊',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '声🎤',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => '音🔈',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '天気🌤️',
            'created_at' => now(),
            'updated_at' => now(),
        ]);DB::table('categories')->insert([
            'name' => '温度🌡️',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => '形🟨',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        

    }
}
