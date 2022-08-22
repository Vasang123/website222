<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
                'initial' => 'SE22-2',
                'name' => 'Jose Susanto',
                'password' => bcrypt('jose123'),
            ],
            [
                'initial' => 'JO22-2',
                'name' => 'Jevon Danaristo',
                'password' => bcrypt('jevon123'),
            ],
            [
                'initial' => 'RG22-2',
                'name' => 'Rico Gunawan',
                'password' => bcrypt('rico123'),
            ],
            [
                'initial' => 'JI22-2',
                'name' => 'Jaysie Lestari',
                'password' => bcrypt('jaysie123'),
            ],
            [
                'initial' => 'GL22-2',
                'name' => 'Josua Golden Umboh',
                'password' => bcrypt('josua123'),
            ],
            [
                'initial' => 'MC22-2',
                'name' => 'Marchel Hermanliansyah',
                'password' => bcrypt('marchel123'),
            ],
            [
                'initial' => 'EA22-2',
                'name' => 'Glory Daniella',
                'password' => bcrypt('glory123'),
            ],
            [
                'initial' => 'YO22-2',
                'name' => 'Josafat Anderson Yonain',
                'password' => bcrypt('josafat123'),
            ],
            [
                'initial' => 'ZN22-2',
                'name' => 'Zenli Huangtara',
                'password' => bcrypt('zenli123'),
            ],
            [
                'initial' => 'MO22-2',
                'name' => 'Mario Iskandar',
                'password' => bcrypt('mario123'),
            ],
            [
                'initial' => 'LK22-2',
                'name' => 'Marvin Luckianto',
                'password' => bcrypt('marvin123'),
            ],
            [
                'initial' => 'HI22-2',
                'name' => 'Hans Indrawan Sucipto',
                'password' => bcrypt('hans123'),
            ],
            [
                'initial' => 'LR22-2',
                'name' => 'Lionel Riyadi',
                'password' => bcrypt('lionel123'),
            ],
            [
                'initial' => 'JC22-2',
                'name' => 'Jason Ananda Cindra',
                'password' => bcrypt('jason123'),
            ],
            [
                'initial' => 'VS22-2',
                'name' => 'Valentino Setiawan',
                'password' => bcrypt('valentino123'),
            ],
            [
                'initial' => 'KC22-2',
                'name' => 'Kevin Christian',
                'password' => bcrypt('kevin123'),
            ],
        ]);
    }
}
