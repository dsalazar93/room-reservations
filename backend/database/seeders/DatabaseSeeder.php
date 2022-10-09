<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Básica',
            'description' => 'La habitación mas sencilla',
            'guests' => 2,
            'beds' => 1,
            'bathrooms' => 1,
            'price' => 100000,
        ]);
        DB::table('types')->insert([
            'name' => 'Media',
            'description' => 'La habitación mas común',
            'guests' => 4,
            'beds' => 2,
            'bathrooms' => 1,
            'price' => 200000,
        ]);
        DB::table('types')->insert([
            'name' => 'Premium',
            'description' => 'La habitación con mas comodidades',
            'guests' => 6,
            'beds' => 3,
            'bathrooms' => 3,
            'price' => 500000,
        ]);

        for ($i=0; $i < 20; $i++) {
            $typeId = 1;

            if($i > 6){
                $typeId = 2;
            }

            if($i > 16){
                $typeId = 3;
            }


            DB::table('rooms')->insert([
                'number' => 101 + $i,
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                'type_id' => $typeId
            ]);
        }
    }
}
