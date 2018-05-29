<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dinâmica',
                'created_at' => '2018-05-04 22:13:20',
                'updated_at' => '2018-05-05 16:54:16',
                'event_classification_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Kundalini',
                'created_at' => '2018-05-04 22:39:29',
                'updated_at' => '2018-05-05 16:54:08',
                'event_classification_id' => 1,
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Maratona de Auto Conhecimento',
                'created_at' => '2018-05-07 18:52:00',
                'updated_at' => '2018-05-07 18:52:38',
                'event_classification_id' => 21,
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'Grupo de Bioenergética',
                'created_at' => '2018-05-07 18:52:24',
                'updated_at' => '2018-05-07 18:52:24',
                'event_classification_id' => 11,
            ),
        ));
        
        
    }
}