<?php

use Illuminate\Database\Seeder;

class EffectifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      if(DB::table('CATEGORIE')->count() == 0){
        DB::table('CATEGORIE')->insert(['NomCategorie'=>'U15']);
      }
    }
}
