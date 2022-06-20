<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 'a',
                'first_name' => "Cyrille",
                'last_name' => "MBIA",
                'gender' => "female",
                'phone' => "695035506",
                'address' => "Yaoundé",
                'email' => "mbia1378@gmail.com",
                'password' => bcrypt('12345678'),
                'avatar' => 'girl-1.png',
                'about' => "hello from the other world",
                'status' => TRUE,
                'remember_token' => Str::random(12),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 'a',
                'first_name' => "Super Admin",
                'last_name' => "Safari",
                'gender' => "male",
                'phone' => "695035506",
                'address' => "Yaoundé",
                'email' => "safari@safarihotel.com",
                'password' => bcrypt('12345678'),
                'avatar' => 'girl-1.png',
                'about' => "hello from the other world",
                'status' => TRUE,
                'remember_token' => Str::random(12),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 'c',
                'first_name' => "Compta",
                'last_name' => "Safari",
                'gender' => "female",
                'phone' => "695035506",
                'address' => "Yaoundé",
                'email' => "compta@safarihotel.com",
                'password' => bcrypt('12345678'),
                'avatar' => 'girl-1.png',
                'about' => "hello from the other world",
                'status' => TRUE,
                'remember_token' => Str::random(12),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 'e',
                'first_name' => "Economa",
                'last_name' => "Safari",
                'gender' => "female",
                'phone' => "695035506",
                'address' => "Yaoundé",
                'email' => "economa@safarihotel.com",
                'password' => bcrypt('12345678'),
                'avatar' => 'girl-1.png',
                'about' => "hello from the other world",
                'status' => TRUE,
                'remember_token' => Str::random(12),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 'r',
                'first_name' => "Reception",
                'last_name' => "Safari",
                'gender' => "female",
                'phone' => "695035506",
                'address' => "Yaoundé",
                'email' => "reception@safarihotel.com",
                'password' => bcrypt('12345678'),
                'avatar' => 'girl-1.png',
                'about' => "hello from the other world",
                'status' => TRUE,
                'remember_token' => Str::random(12),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
        ));
    }
}
