<?php

use Illuminate\Database\Seeder;

class EventClassificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_classifications')->delete();
        
        \DB::table('event_classifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Meditação',
                'created_at' => '2018-05-04 22:12:55',
                'updated_at' => '2018-05-07 19:27:21',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Bioenérgica',
                'created_at' => '2018-05-07 18:51:21',
                'updated_at' => '2018-05-07 18:51:21',
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Maratona',
                'created_at' => '2018-05-07 18:51:42',
                'updated_at' => '2018-05-07 18:51:42',
            ),
        ));
        
        
    }
}