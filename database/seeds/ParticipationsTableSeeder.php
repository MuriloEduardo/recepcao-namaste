<?php

use Illuminate\Database\Seeder;

class ParticipationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('participations')->delete();
        
        \DB::table('participations')->insert(array (
            0 => 
            array (
                'id' => 22,
                'event_id' => 22,
                'start' => '2018-05-07 00:00:00',
                'end' => '2018-05-07 00:00:00',
                'created_at' => '2018-05-07 18:53:08',
                'updated_at' => '2018-05-07 19:12:35',
            ),
            1 => 
            array (
                'id' => 32,
                'event_id' => 12,
                'start' => '0018-05-08 00:00:00',
                'end' => '0018-05-09 00:00:00',
                'created_at' => '2018-05-08 12:26:35',
                'updated_at' => '2018-05-08 12:26:35',
            ),
        ));
        
        
    }
}