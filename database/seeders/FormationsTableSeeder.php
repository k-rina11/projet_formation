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
                'titre' => 'Les bases du SEO',
                'duree'=>36,
                'image'=>"",
                'categorie_id'=>1
        
        ),
            array(
                'titre' => 'Creer un site web avec Wordpress',
                'duree'=>36,
                'image'=>"",
                'categorie_id'=>2
            ),
            array(
                'titre' => 'Moodbord de site internet',
                'duree'=>24,
                'image'=>"",
                'categorie_id'=>2
            ),
            
        );

        DB::table('formations')->insert($formations);
    }
}
