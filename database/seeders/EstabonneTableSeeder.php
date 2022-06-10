<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstabonneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estabonnes')->delete();

        $estabonne= array(
            array(
                'user_id'=>1,
                'formation_id'=>1
            )
            );

            DB::table('estabonnes')->insert($estabonne);
    }
}
