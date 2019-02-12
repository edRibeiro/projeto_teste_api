<?php

use Illuminate\Database\Seeder;

class ProfessionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Professional::class, 10)->create();
    }
}
