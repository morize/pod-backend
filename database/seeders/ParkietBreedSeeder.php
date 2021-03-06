<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ParkietBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parkiet_breed_array = ["Grasparkiet","Monniksparkiet","Pruimkopparkiet","Valkparkiet","Turquoisine parkiet","Regentparkiet"];
        
        foreach ($parkiet_breed_array as $breed) {
            DB::table('pet_kind_and_breed')->insert([
                'kind' => "Parkiet",
                'breed' => $breed,
            ]);
        }
    }
}
