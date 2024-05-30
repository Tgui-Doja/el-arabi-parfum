<?php

namespace Database\Seeders;

use App\Models\Niche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niches = [
            ['name' => 'DIOR PRIVE', 'price' => '100', 'image' => 'DIORPRIVE.jpg'],
            ['name' => 'TOM FORD', 'price' => '100', 'image' => 'TOMFORD.jpg'],
            ['name' => 'LOUIS VUITTON', 'price' => '100', 'image' => 'LOUISVUITTON.jpg'],
            ['name' => 'ARMANI PRIVE', 'price' => '100', 'image' => 'ARMANIPRIVE.jpg'],
            ['name' => 'DOLCE $ GABBANA', 'price' => '100', 'image' => 'DOLCE_GABBANA.jpg'],
            ['name' => 'GUCCI', 'price' => '100', 'image' => 'GUCCI.jpg'],
            ['name' => 'KAYALI', 'price' => '300', 'image' => 'KAYALI.jpg'],
            ['name' => 'XERJOFF', 'price' => '100', 'image' => 'XERJOFF.jpg'],
            ['name' => 'CHOPARD', 'price' => '100', 'image' => 'CHOPARD.jpg'],
            ['name' => 'ARMAF', 'price' => '100', 'image' => 'ARMAF.jpg'],
            ['name' => 'BYREDO', 'price' => '100', 'image' => 'BYREDO.jpg'],
            ['name' => 'ROBERTO CAYALLI', 'price' => '100', 'image' => 'ROBERTOCAYALLI.jpg'],
        
        ];

        // Loop through the products array and create a new product for each entry
        foreach ($niches as $niche) {
            Niche::create($niche);
        }
    }
}
