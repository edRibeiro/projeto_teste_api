<?php

use Illuminate\Database\Seeder;

class EstablishmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Establishment::class, 10)->create();
    }
}
