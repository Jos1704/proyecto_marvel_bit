<?php

namespace Database\Seeders;

use App\Models\Sucursale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            'name' => 'Sucursal Toluca',
            'no_number' => '12',
            'location' => 'Gran Plaza Toluca',
            'hours' => json_encode([
                'Monday'=> '8:00 - 18:00',
                'Tuesday' => '8:00 - 18:00',
                'Wednesday' => '8:00 - 18:00',
                'Thursday' => '8:00 - 18:00',
                'Friday' => '8:00 - 18:00',
                'Saturday' => '9:00 - 13:00',
                'Sunday' => '9:00 - 13:00',
            ]),
            'status' => Sucursale::STATUS_ACTIVE,
            'phone' => 722459185,
            'img' => 'sucursal_toluca.png'
        ]);

        DB::table('sucursales')->insert([
            'name' => 'Sucursal Metepec',
            'no_number' => '14',
            'location' => 'Town Square Metepec',
            'hours' => json_encode([
                'Monday' => '8:00 - 16:00',
                'Tuesday' => '8:00 - 16:00',
                'Wednesday' => '8:00 - 16:00',
                'Thursday' => '8:00 - 16:00',
                'Friday' => '8:00 - 16:00',
                'Saturday' => '9:00 - 15:00',
                'Sunday' => '9:00 - 15:00',
            ]),
            'status' => Sucursale::STATUS_ACTIVE,
            'phone' => 722459185,
            'img' => 'sucursal_metepec.png'
        ]);
        DB::table('sucursales')->insert([
            'name' => 'Sucursal Lerma',
            'no_number' => '16',
            'location' => 'Plaza Outlet Lerma',
            'hours' => json_encode([
                'Monday' => '8:00 - 16:00',
                'Tuesday' => '8:00 - 16:00',
                'Wednesday' => '8:00 - 16:00',
                'Thursday' => '8:00 - 16:00',
                'Friday' => '8:00 - 16:00',
                'Saturday' => '9:00 - 15:00',
                'Sunday' => '9:00 - 15:00',
            ]),
            'status' => Sucursale::STATUS_ACTIVE,
            'phone' => 722459185,
            'img' => 'sucursal_lerma.png'
        ]);
        DB::table('sucursales')->insert([
            'name' => 'Sucursal CDMX',
            'no_number' => '18',
            'location' => 'Plaza Polanco',
            'hours' => json_encode([
                'Monday' => '8:00 - 18:00',
                'Tuesday' => '8:00 - 18:00',
                'Wednesday' => '8:00 - 18:00',
                'Thursday' => '8:00 - 18:00',
                'Friday' => '8:00 - 18:00',
                'Saturday' => '9:00 - 13:00',
                'Sunday' => '9:00 - 13:00',
            ]),
            'status' => Sucursale::STATUS_ACTIVE,
            'phone' => 722459185,
            'img' => 'sucursal_cdmx.png'
        ]);
    }
}
