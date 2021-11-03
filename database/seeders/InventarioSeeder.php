<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventarios')->insert([
            'sucursal_id' => 1,
            'name_comic' => '100th Anniversary Special (2014)',
            'comic_id' => 18454
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 1,
            'name_comic' => '15 Love (2011)',
            'comic_id' => 13379
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 1,
            'name_comic' => '1602 (2003 - 2004)',
            'comic_id' => 489
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 2,
            'name_comic' => '1602 Witch Hunter Angela (2015)',
            'comic_id' => 19244
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 2,
            'name_comic' => '1872 (2015)',
            'comic_id' => 19501
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 2,
            'name_comic' => '2020 Force Works (2020)',
            'comic_id' => 29693
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 3,
            'name_comic' => '2020 Iron Age (2020)',
            'comic_id' => 29692
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 3,
            'name_comic' => '2020 Ironheart (2020)',
            'comic_id' => 29694
        ]);
        DB::table('inventarios')->insert([
            'sucursal_id' => 3,
            'name_comic' => '2020 iWolverine (2020)',
            'comic_id' => 29697
        ]);
    }
}
