<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = DB::table('produits')->insert(
            ['categorie_id' => '1', 'unite_id' => '6', 'nom' => 'nido', 'prixUnitaire' => '2500', 'quantiteProduit' => '150'],
            ['categorie_id' => '2', 'unite_id' => '2', 'nom' => 'sangria', 'prixUnitaire' => '1500', 'quantiteProduit' => '50'], 
            ['categorie_id' => '6', 'unite_id' => '6', 'nom' => 'provocateur', 'prixUnitaire' => '2000', 'quantiteProduit' => '100']);

    }
}
