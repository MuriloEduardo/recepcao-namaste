<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-05 14:53:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuário',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-05 14:58:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'dev',
                'display_name' => 'Desenvolvedor',
                'created_at' => '2018-05-05 14:51:28',
                'updated_at' => '2018-05-05 14:51:28',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'root',
                'display_name' => 'Desenvolvedor',
                'created_at' => '2018-05-07 18:55:44',
                'updated_at' => '2018-05-07 18:56:12',
            ),
        ));
        
        
    }
}