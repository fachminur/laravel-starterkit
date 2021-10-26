<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RmenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name_menu' => "Beranda",
                'kode_menu' => "BRND",
                'position_menu' => "SIDE",
                'controller_menu' => 'home',
                'icon_menu' => 'fa-home',
                'order_menu' => '1',
                'status_menu' => '1',
                'read_menu' => '1',
                'add_menu' => '1',
                'edit_menu' => '1',
                'delete_menu' => '1',
                'created_by' => 'SEEDER',
                'updated_by' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name_menu' => "Starter",
                'kode_menu' => "STRT",
                'position_menu' => "TITLE",
                'controller_menu' => null,
                'icon_menu' => null,
                'order_menu' => '2',
                'status_menu' => '1',
                'read_menu' => '1',
                'add_menu' => '1',
                'edit_menu' => '1',
                'delete_menu' => '1',
                'created_by' => 'SEEDER',
                'updated_by' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name_menu' => "Menu",
                'kode_menu' => "MNU",
                'position_menu' => "SIDE",
                'controller_menu' => 'menu',
                'icon_menu' => 'fa-columns',
                'order_menu' => '3',
                'status_menu' => '1',
                'read_menu' => '1',
                'add_menu' => '1',
                'edit_menu' => '1',
                'delete_menu' => '1',
                'created_by' => 'SEEDER',
                'updated_by' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('r_menu')->insert($posts);
    }
}
