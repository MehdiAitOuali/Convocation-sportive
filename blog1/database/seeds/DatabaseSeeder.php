<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(EffectifSeeder::class);

          DB::table('CATEGORIE')->insert(['NomCategorie'=>'U15']);
    }
}
