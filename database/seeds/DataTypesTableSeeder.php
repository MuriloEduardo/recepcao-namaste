<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuário',
                'display_name_plural' => 'Usuários',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-05 16:34:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'events',
                'slug' => 'eventos',
                'display_name_singular' => 'Evento',
                'display_name_plural' => 'Eventos',
                'icon' => 'voyager-pizza',
                'model_name' => 'App\\Event',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-04 20:51:19',
                'updated_at' => '2018-05-05 16:12:40',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'event_classifications',
                'slug' => 'event-classifications',
                'display_name_singular' => 'Classificação de Evento',
                'display_name_plural' => 'Classificações de Eventos',
                'icon' => 'voyager-pie-chart',
                'model_name' => 'App\\EventClassification',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-05 16:05:25',
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'customers',
                'slug' => 'clientes',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-04 22:26:43',
                'updated_at' => '2018-05-05 16:12:19',
            ),
            6 => 
            array (
                'id' => 13,
                'name' => 'professionals',
                'slug' => 'profissionais',
                'display_name_singular' => 'Profissional',
                'display_name_plural' => 'Profissionais',
                'icon' => 'voyager-study',
                'model_name' => 'App\\Professional',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-05 16:12:57',
            ),
            7 => 
            array (
                'id' => 14,
                'name' => 'customer_types',
                'slug' => 'customer-types',
                'display_name_singular' => 'Tipo de Cliente',
                'display_name_plural' => 'Tipos de Clientes',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\CustomerType',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            8 => 
            array (
                'id' => 15,
                'name' => 'how_did_find_outs',
                'slug' => 'how-did-find-outs',
                'display_name_singular' => 'Como Ficou Sabendo',
                'display_name_plural' => 'Como Ficou Sabendo',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\HowDidFindOut',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-05 16:02:15',
                'updated_at' => '2018-05-05 16:02:15',
            ),
            9 => 
            array (
                'id' => 16,
                'name' => 'professional_types',
                'slug' => 'professional-types',
                'display_name_singular' => 'Tipo de Profissional',
                'display_name_plural' => 'Tipos de Profissionais',
                'icon' => NULL,
                'model_name' => 'App\\ProfessionalType',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-05 16:41:38',
                'updated_at' => '2018-05-05 16:41:38',
            ),
            10 => 
            array (
                'id' => 22,
                'name' => 'participations',
                'slug' => 'participacoes',
                'display_name_singular' => 'Participação',
                'display_name_plural' => 'Participações',
                'icon' => 'voyager-bell',
                'model_name' => 'App\\Participation',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-08 12:38:58',
            ),
            11 => 
            array (
                'id' => 31,
                'name' => 'files',
                'slug' => 'fichas',
                'display_name_singular' => 'Ficha',
                'display_name_plural' => 'Fichas',
                'icon' => 'voyager-photos',
                'model_name' => 'App\\File',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-05-29 02:48:41',
                'updated_at' => '2018-05-29 02:52:41',
            ),
        ));
        
        
    }
}