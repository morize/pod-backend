<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatBreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_breed_array = ["Bengal","Burmese","British Shorthair","Siberian","Siamese","Tonkinese"];
        
        foreach ($cat_breed_array as $breed) {
            DB::table('pet_kind_and_breed')->insert([
                'kind' => "Kat",
                'breed' => $breed,
            ]);
        }
    }
}
