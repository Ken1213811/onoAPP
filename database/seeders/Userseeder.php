<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記
use Illuminate\Support\Facades\Hash;#追記

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'A',
            'email'=>'a@gmail.com',
            'password'=> Hash::make('aaaaaaaa'),
            'role'=>0
            ]);
        DB::table('users')->insert([
            'name'=>'B',
            'email'=>'b@gmail.com',
            'password'=> Hash::make('bbbbbbbb'),
            'role'=>0
            ]);

            DB::table('users')->insert([
                'name'=>'C',
                'email'=>'c@gmail.com',
                'password'=> Hash::make('cccccccc'),
                'role'=>0
            ]);
            DB::table('users')->insert([
                'name'=>'D',
                'email'=>'d@gmail.com',
                'password'=> Hash::make('dddddddd'),
                'role'=>0
            ]);
            DB::table('users')->insert([
                'name'=>'E',
                'email'=>'e@gmail.com',
                'password'=> Hash::make('eeeeeeee'),
                'role'=>0
            ]);
            DB::table('users')->insert([
                'name'=>'ken',
                'email'=>'2430358702qq@gmail.com',
                'password'=> Hash::make('wx1314520'),
                'role'=>1
            ]);
    }
}