<?php

use Illuminate\Database\Seeder;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        \App\Model\Keluarga::truncate();
        foreach (range(1, 30) as $index)
        {
            \App\Model\Keluarga::create([
                             'id_kk' => $faker->unique()->numberBetween(1,200),
                             'id_lingkungan' => $faker->numberBetween(1,5),
                         ]);
        }
        //
    }
}
