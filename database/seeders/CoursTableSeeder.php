<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cours')->delete();

        $cours=array(
            array(
               'titre'=>'creation de l en-téte',
               'slug' =>'creation-de-l-en-téte',
               'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. dolorem similique enim corrupti!',
               'resume-cours' =>'https://www.canva.com/design/DAFBIGT21YM/AlH4dm6waDNDOPkpapYtcw/view?utm_content=DAFBIGT21YM&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink',
               'liens' =>'https://app.diagrams.net/',
               'video' =>'https://youtu.be/--VNPp-bHJs',
               'formation_id' =>1,
               'module_id' =>1,
            ),

            array(
                'titre'=>'creation du menu',
                'slug' =>'creation-du-menu',
                'description' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. dolorem similique enim corrupti!',
                'resume-cours' =>'https://www.canva.com/design/DAFBIGT21YM/AlH4dm6waDNDOPkpapYtcw/view?utm_content=DAFBIGT21YM&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink',
                'liens' =>'https://app.diagrams.net/',
                'video' =>'https://youtu.be/--VNPp-bHJs',
                'formation_id' =>1,
                'module_id' =>1,
             ),
            
        );

            DB::table('cours')->insert($cours);

    }
}
