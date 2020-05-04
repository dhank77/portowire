<?php

use App\Description;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Description::create([
            'name' => 'M. Hamdani Ilham Latjoro, S.T',
            'contact' => 'd41113512@gmail.com 082396151291',
            'address' => 'Jalan Talasalapang 1 Blok Y no 1 Makassar',
            'social' => 'https://www.facebook.com/andank.parawali~https://github.com/dhank77/~https://id.linkedin.com/in/m-hamdani-ilham-latjoro-001652180'
        ]);
    }
}
