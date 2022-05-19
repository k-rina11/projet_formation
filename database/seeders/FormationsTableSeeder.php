<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->delete();

        $formations = array(
            array(
                'nom' => 'Les bases du SEO',
                'duree'=>36,

                'categorie_id'=>1
        
        ),
            array(
                'nom' => 'Creer un site web avec Wordpress',
                'duree'=>36,

                'categorie_id'=>2
            ),
            array(
                'nom' => 'Moodbord de site internet',
                'duree'=>24,

                'categorie_id'=>2
            ),
            
        );

        DB::table('formations')->insert($formations);
    }
}
