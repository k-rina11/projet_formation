<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->delete();

        $categories = array(
            array('titre' => 'SEO'),
            array('titre' => 'Création de site web'),
            array('titre' => 'Gestion projet web'),
            
        );

        DB::table('categories')->insert($categories);
    }
}
