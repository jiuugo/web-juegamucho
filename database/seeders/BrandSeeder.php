<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['id' => 1, 'name' => 'LEGO'],
            ['id' => 2, 'name' => 'Playmobil'],
            ['id' => 3, 'name' => 'Barbie'],
            ['id' => 4, 'name' => 'Hot Wheels'],
            ['id' => 5, 'name' => 'Hasbro'],
            ['id' => 6, 'name' => 'Mattel'],
            ['id' => 7, 'name' => 'VTech'],
            ['id' => 8, 'name' => 'Fisher-Price'],
            ['id' => 9, 'name' => 'Ravensburger'],
            ['id' => 10, 'name' => 'NERF'],
            ['id' => 11, 'name' => 'Nintendo'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
