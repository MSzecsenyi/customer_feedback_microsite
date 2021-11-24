<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->create([
            'url' => 'cordia',
            'color' => "yellow",
            'logo' => "https://www.bauapp.com/wp-content/uploads/2020/10/cordiablack1-300x70.png",
            'company_name' => 'Cordia',
            'image' => "1.jpg",
        ]);

        Company::factory()->create([
            'url' => 'metrodom',
            'color' => "green",
            'logo' => "https://www.bauapp.com/wp-content/uploads/2020/10/metrodoom-300x126.png",
            'company_name' => 'Metrodom',
            'image' => "2.jpg",
        ]);

        Company::factory()->create([
            'url' => 'whb',
            'color' => "red",
            'logo' => "https://www.bauapp.com/wp-content/uploads/2020/10/WHB_Logo_RGB-600x358-1-300x179.png",
            'company_name' => 'WHB',
            'image' => "3.jpg",
        ]);

        Company::factory()->create([
            'url' => 'dekpol',
            'color' => "blue",
            'logo' => "https://dekpol.pl/wp-content/uploads/2018/09/logo_dekpol_pl.svg",
            'company_name' => 'Dekpol',
            'image' => "2.jpg",
        ]);
    }
}
