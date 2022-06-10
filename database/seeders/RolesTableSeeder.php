<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->delete();

        $users_roles = array(
            array('nom' => 'Client'),
            array('nom' => 'Administrateur'),
            array('nom' => 'Super-Administrateur'),
           
            
        );

        DB::table('roles')->insert($users_roles);


     /*   DB::table('roles')->delete();

        if (Role::where('nom', '=', 'Administrator')->first() === null) {
            Role::create([
                'titre'  => 'admin',
                'nom'   => 'Administrator',
            ]);
        }
        
        if (Role::where('nom', '=', 'User')->first() === null) {
            Role::create([
                'titre'  => 'user',
                'nom'   => 'customer',
            ]);
        }


        if (Role::where('nom', '=', 'SuperAdmin')->first() === null) {
            Role::create([
                'titre'  => 'admin',
                'nom'   => 'SuperAdmin',
            ]);
        }*/

    }

    
}
