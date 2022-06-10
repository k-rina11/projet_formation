<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users=array(
            array(
                'name'=>'arnaud',
               // 'prenom'=>'durocher',
                'email'=>'arnauddurocher@gmail.com',
                'password'=>'arnaud',
                'pays'=>'france',
                'role_id'=>1,
            )
        );

        DB::table('users')->insert($users);
    }
}
