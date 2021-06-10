<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $users = array(
            array(
                'name' => 'Reili A',
                'email' => 'reili@a.ee',
                'password' => Hash::make('password'),
                'admin' => true,
            ),
            array(
                'name' => 'Reili NA',
                'email' => 'reili@na.ee',
                'password' => Hash::make('password'),
                'admin' => false,
            )
        );

        DB::table('users')->insert($users);
    }
}
