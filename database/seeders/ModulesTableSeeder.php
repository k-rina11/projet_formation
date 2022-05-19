<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->delete();

        $modules = array(
            array('titre' => 'Introduction'),
            array('titre' => 'Prérequis'),
            array('titre' => 'Mesurer le ROI'),
            
        );

        DB::table('modules')->insert($modules);

    }
}
