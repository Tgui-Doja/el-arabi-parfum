<?php

namespace Database\Seeders;

use App\Models\Femme;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FemmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $femmes = [
            ['name' => 'DIOR', 'price' => '100', 'image' => 'dior.jpg'],
            ['name' => 'CHANEL', 'price' => '100', 'image' => 'chanel.jpg'],
            ['name' => 'HUGO BOSS', 'price' => '100', 'image' => 'hugo_boss.jpg'],
            ['name' => 'MICHAEL KORS', 'price' => '100', 'image' => 'michael_kors.jpg'],
            ['name' => 'MARLY', 'price' => '100', 'image' => 'marly.jpg'],
            ['name' => 'GUERLAIN', 'price' => '100', 'image' => 'guerlain.jpg'],
            ['name' => 'VERSACE', 'price' => '300', 'image' => 'versace.jpg'],
            ['name' => 'DOLCE & GABBANA', 'price' => '100', 'image' => 'dolce_gabbana.jpg'],
            ['name' => 'ESCADA', 'price' => '100', 'image' => 'escada.jpg'],
            ['name' => 'CREED', 'price' => '100', 'image' => 'creed.jpg'],
            ['name' => 'HERMES', 'price' => '100', 'image' => 'hermes.jpg'],
            ['name' => 'GUCCI', 'price' => '100', 'image' => 'gucci.jpg'],
    
        ];

        // Loop through the products array and create a new product for each entry
        foreach ($femmes as $femme) {
            Femme::create($femme);
        }
    }
}
