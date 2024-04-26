<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'White',
            'Black',
            'Red',
            'Blink',
            'Blue',
            'Be',
            'Moss green',
        ];

        foreach ($colors as $color) {
            DB::table('colors')->insert([
                'name' => $color,
            ]);
        }
    }
}
