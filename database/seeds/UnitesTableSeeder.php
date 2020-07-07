<?php

use Illuminate\Database\Seeder;

class UnitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unites')->insert(
             ['unite' => 'kilo'],
             ['unite' => 'bouteille'],
             ['unite' => 'paquet'],
             ['unite' => 'sachet'],
             ['unite' => 'pot'],
             ['unite' => 'boite'],
         );
    }
}
