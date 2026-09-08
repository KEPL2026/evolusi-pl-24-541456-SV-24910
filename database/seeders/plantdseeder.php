<?php

namespace Database\Seeders;

use App\Models\plantd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class plantdseeder extends Seeder
{
    public function run(): void
    {
        plantd::factory()->count(20)->create();
    }
}









        // for ($i = 0; $i < 10; $i++) {
        //     plantd::create([
        //         'Pemilik_lahan' => fake() ->name(),
        //         'Luas_lahan' => fake() ->numberBetween(185,250),
        //         'created_at' => fake () ->date(),
        //         'updated_at' => fake () ->date()
        //     ]);