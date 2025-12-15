<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'name' => 'Construcción'],
            ['id' => 2, 'name' => 'Muñecas y figuras'],
            ['id' => 3, 'name' => 'Vehículos'],
            ['id' => 4, 'name' => 'Juegos de mesa'],
            ['id' => 5, 'name' => 'Educativos'],
            ['id' => 6, 'name' => 'Peluches'],
            ['id' => 7, 'name' => 'Aire libre'],
            ['id' => 8, 'name' => 'Electrónicos'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
