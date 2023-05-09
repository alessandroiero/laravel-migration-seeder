<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i= 0; $i <= 40; $i++) {
            //new
            $newTrain = new Train();

            $newTrain->azienda = $faker->randomElement(['Frecciarossa','Trenitalia','Italo','Frecciargento']);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno =$faker->randomElement(['ABCD123','EFGH123','ILMN123','OOPQ123']);
            $newTrain->n_carrozza =$faker->numberBetween(1,30);
            // save
            $newTrain->save();
    }
}}
