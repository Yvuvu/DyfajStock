<?php

use Illuminate\Database\Seeder;

class EntreesTableSeeder extends Seeder
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
            ['produit_id' => 2, 'quantiteEntree' => 300, 'dateEntree' => '2020-06-30'],
            [ 'produit_id' => 3, 'quantiteEntree' => 500, 'dateEntree' => '2020-06-30']);    
    }
}
