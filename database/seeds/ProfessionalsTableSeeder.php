<?php

use Illuminate\Database\Seeder;

class ProfessionalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professionals')->delete();
        
        \DB::table('professionals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => NULL,
                'sannyas' => 'Manindra',
                'professional_type_id' => 2,
                'created_at' => '2018-05-04 22:38:19',
                'updated_at' => '2018-05-07 18:48:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => NULL,
                'sannyas' => 'Aiman',
                'professional_type_id' => 2,
                'created_at' => '2018-05-04 22:38:34',
                'updated_at' => '2018-05-07 18:48:08',
            ),
            2 => 
            array (
                'id' => 11,
                'name' => NULL,
                'sannyas' => 'Manav',
                'professional_type_id' => 12,
                'created_at' => '2018-05-07 18:48:32',
                'updated_at' => '2018-05-07 18:48:32',
            ),
        ));
        
        
    }
}