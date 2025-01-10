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
            'id'=>'1',
            'name'=>'キラキラ',
            'description'=>'眩しく光る',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        
    }
}
