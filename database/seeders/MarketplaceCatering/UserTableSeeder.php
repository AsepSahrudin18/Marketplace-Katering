<?php

namespace Database\Seeders\MarketplaceCatering;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            [
                'id'                => 1,
                'name'              => 'Asep Sahrudin',
                'email'             => 'asepsahrudin0399@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('password123!'),
                'role_id'           => 1,
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]
            ];
        DB::table('users')->insert($users);
    }
}
