<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(){
        return DB::table('users')->insert([
           'name' => 'Mahdi Romzuz Zaki',
           'email' => '211131016@mhs.stiki.ac.id',
           'password' => Hash::make('zaki....')
        ]);
      }
     
}
