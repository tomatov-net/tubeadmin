<?php

use Illuminate\Database\Seeder;

class MadicineManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\MedicineManufacturer::class, 20)->create();

    }
}