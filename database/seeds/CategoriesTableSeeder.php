<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(
             [ 'categorie' => 'laitiers'],
             ['categorie' => 'vin'],
             ['categorie' => 'boisson'],
             ['categorie' => 'poissonnerie'],
             ['categorie' => 'charcuterie'],
             ['categorie' => 'cosmetique']);
    }
}
