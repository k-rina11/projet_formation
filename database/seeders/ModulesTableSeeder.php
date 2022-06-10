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
            array('titre' => 'Introduction',
                    'formation_id'=>1
        ),
            array('titre' => 'Prérequis',
                    'formation_id'=>1
        ),
            array('titre' => 'Mesurer le ROI',
                    'formation_id'=>1
        ),
            
        );

        DB::table('modules')->insert($modules);

    }
}
