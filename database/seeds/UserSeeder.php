<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'felicite',
            'email' => 'felicitemaryvonne@gmail.com',
            'password' => Hash::make('felicite'),
            'role_id' => '1',
        ]);
    }
}
