<?php

use Illuminate\Database\Seeder;

class ProfessionalParticipationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('professional_participations')->delete();
        
        \DB::table('professional_participations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'professional_id' => 1,
                'participation_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'professional_id' => 2,
                'participation_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 12,
                'professional_id' => 1,
                'participation_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 22,
                'professional_id' => 2,
                'participation_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 32,
                'professional_id' => 1,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 42,
                'professional_id' => 2,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 52,
                'professional_id' => 11,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 62,
                'professional_id' => 21,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}