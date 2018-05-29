<?php

use Illuminate\Database\Seeder;

class ProfessionalTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professional_types')->delete();
        
        \DB::table('professional_types')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Terapeuta',
                'created_at' => '2018-05-07 18:47:24',
                'updated_at' => '2018-05-07 18:47:24',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Face Original',
                'created_at' => '2018-05-07 18:47:33',
                'updated_at' => '2018-05-07 18:47:33',
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'F8',
                'created_at' => '2018-05-07 18:47:44',
                'updated_at' => '2018-05-07 18:47:44',
            ),
        ));
        
        
    }
}