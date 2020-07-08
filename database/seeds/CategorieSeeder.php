<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['categorie' => 'ustensiles'],
            ['categorie' => 'conserves'],
            ['categorie' => 'bieres'],
            ['categorie' => 'sodas'],
            ['categorie' => 'jus de fruits'],
            ['categorie' => 'eau'],
            ['categorie' => 'boissons instantanées'],
            ['categorie' => 'lait'],
            ['categorie' => 'fromages'],
            ['categorie' => 'huiles'],
            ['categorie' => 'sucres'],
            ['categorie' => 'thes'],
            ['categorie' => 'pates alimentaires'],
            ['categorie' => 'riz'],
            ['categorie' => 'savons'],
            ['categorie' => 'Vinaigres'],
            ['categorie' => 'Exhausteurs de goût'],
            ['categorie' => 'poissons'],
            ['categorie' => 'crustaces'],
            ['categorie' => 'amuses-bouches']

        ]);
    }
}
