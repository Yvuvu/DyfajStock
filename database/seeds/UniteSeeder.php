<?php

use Illuminate\Database\Seeder;

class UniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unites')->insert([
            ['unite' => 'unite'],
            ['unite' => 'kg'],
            ['unite' => 'litre'],
            ['unite' => 'bouteille'],
            ['unite' => 'sac'],
            ['unite' => 'pot'],
            ['unite' => 'boite'],
            ['unite' => 'paquet']
        ]);
    }
}
