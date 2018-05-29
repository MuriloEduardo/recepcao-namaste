<?php

use Illuminate\Database\Seeder;

class CustomerParticipationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_participations')->delete();
        
        \DB::table('customer_participations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'participation_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 2,
                'participation_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'customer_id' => 2,
                'participation_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'customer_id' => 1,
                'participation_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 22,
                'customer_id' => 2,
                'participation_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 32,
                'customer_id' => 2,
                'participation_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 42,
                'customer_id' => 4,
                'participation_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 52,
                'customer_id' => 21,
                'participation_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 61,
                'customer_id' => 1,
                'participation_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 62,
                'customer_id' => 1,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 72,
                'customer_id' => 2,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 82,
                'customer_id' => 4,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 92,
                'customer_id' => 21,
                'participation_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}