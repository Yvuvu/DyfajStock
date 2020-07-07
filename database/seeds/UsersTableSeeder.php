<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            ['role_id' =>'1','name' => 'sophia', 'email' => 'nouni@gmail.com', 'password' => Hash::make('sophiaso')],
            ['role_id' =>'2','name' =>'dominique', 'email' => 'dbagre@gmail.com', 'password' => Hash::make('dominique')]);
    }
}