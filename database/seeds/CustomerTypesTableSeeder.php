<?php

use Illuminate\Database\Seeder;

class CustomerTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_types')->delete();
        
        \DB::table('customer_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Amigos',
                'created_at' => '2018-05-05 15:51:37',
                'updated_at' => '2018-05-07 19:23:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Em Terapia',
                'created_at' => '2018-05-05 15:51:46',
                'updated_at' => '2018-05-07 19:23:12',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Pagamento Avulso',
                'created_at' => '2018-05-07 19:23:59',
                'updated_at' => '2018-05-07 19:23:59',
            ),
            3 => 
            array (
                'id' => 21,
                'name' => 'Comunicação',
                'created_at' => '2018-05-07 19:24:13',
                'updated_at' => '2018-05-07 19:24:13',
            ),
            4 => 
            array (
                'id' => 22,
                'name' => 'Não Contactáveis',
                'created_at' => '2018-05-07 19:24:26',
                'updated_at' => '2018-05-07 19:24:26',
            ),
        ));
        
        
    }
}