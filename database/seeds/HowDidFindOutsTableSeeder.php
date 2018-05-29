<?php

use Illuminate\Database\Seeder;

class HowDidFindOutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('how_did_find_outs')->delete();
        
        \DB::table('how_did_find_outs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Passou na Frente',
                'created_at' => '2018-05-05 16:10:47',
                'updated_at' => '2018-05-07 19:25:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Amigos',
                'created_at' => '2018-05-07 19:24:50',
                'updated_at' => '2018-05-07 19:24:50',
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'Site',
                'created_at' => '2018-05-07 19:25:01',
                'updated_at' => '2018-05-07 19:25:01',
            ),
            3 => 
            array (
                'id' => 21,
                'name' => 'Flyer',
                'created_at' => '2018-05-07 19:25:13',
                'updated_at' => '2018-05-07 19:25:13',
            ),
            4 => 
            array (
                'id' => 22,
                'name' => 'Facebook',
                'created_at' => '2018-05-07 19:25:22',
                'updated_at' => '2018-05-07 19:25:22',
            ),
            5 => 
            array (
                'id' => 31,
                'name' => 'Jornal: O Rebelde',
                'created_at' => '2018-05-07 19:26:02',
                'updated_at' => '2018-05-07 19:26:02',
            ),
            6 => 
            array (
                'id' => 32,
                'name' => 'Agenda Namastê',
                'created_at' => '2018-05-07 19:26:14',
                'updated_at' => '2018-05-07 19:26:14',
            ),
            7 => 
            array (
                'id' => 41,
                'name' => 'Divulgação na Rua',
                'created_at' => '2018-05-07 19:26:25',
                'updated_at' => '2018-05-07 19:26:25',
            ),
        ));
        
        
    }
}