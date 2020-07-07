<?php

use Illuminate\Database\Seeder;

class VentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('entrees')->insert(
         ['idProduit' => 2, 'quantiteVente' => 5, 'dateVente' => '2020-06-30', 'montantAchat' => 3, 'montantRecu' => 500],
         ['idProduit' => 3, 'quantiteVente' => 15, 'dateVente' => '2020-06-30', 'montantAchat' => 3, 'montantRecu' => 500]); 
    }
}
