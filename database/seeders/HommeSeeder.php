<?php

namespace Database\Seeders;

use App\Models\Homme;
use Illuminate\Database\Seeder;

class HommeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hommes = [
            ['name' => 'DIOR', 'price' => '100', 'image' => 'dior1.jpg'],
            ['name' => 'CHANEL', 'price' => '100', 'image' => 'chanel1.jpg'],
            ['name' => 'HUGO BOSS', 'price' => '100', 'image' => 'hugo_boss1.jpg'],
            ['name' => 'AZZARO', 'price' => '100', 'image' => 'azzaro.jpg'],
            ['name' => 'CARRON', 'price' => '100', 'image' => 'carron.jpg'],
            ['name' => 'LALIQUE', 'price' => '100', 'image' => 'lalique.jpg'],
            ['name' => 'NIKOS', 'price' => '300', 'image' => 'nikos.jpg'],
            ['name' => 'AXE', 'price' => '100', 'image' => 'axe.jpg'],
            ['name' => 'KARIZMA', 'price' => '100', 'image' => 'karizma.jpg'],
            ['name' => 'CREED', 'price' => '100', 'image' => 'creed1.jpg'],
            ['name' => 'NIKOS', 'price' => '100', 'image' => 'nikos.jpg'],
            ['name' => 'ZARA', 'price' => '100', 'image' => 'zara.jpg'],
        ];
        foreach ($hommes as $homme) {
            Homme::create($homme);
        }
    }
}
