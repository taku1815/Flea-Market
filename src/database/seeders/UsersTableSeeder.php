<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'abcd@gmail.com',
                'password' => 'aaa',
                'name' => '田中',

            ],
        ];
        DB::table('users')->insert($users);
    }
}
