<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-05-04 20:43:39',
                'updated_at' => '2018-05-04 20:43:39',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-05-04 20:43:41',
                'updated_at' => '2018-05-04 20:43:41',
            ),
            26 => 
            array (
                'id' => 42,
                'key' => 'browse_events',
                'table_name' => 'events',
                'created_at' => '2018-05-04 20:51:20',
                'updated_at' => '2018-05-04 20:51:20',
            ),
            27 => 
            array (
                'id' => 43,
                'key' => 'read_events',
                'table_name' => 'events',
                'created_at' => '2018-05-04 20:51:20',
                'updated_at' => '2018-05-04 20:51:20',
            ),
            28 => 
            array (
                'id' => 44,
                'key' => 'edit_events',
                'table_name' => 'events',
                'created_at' => '2018-05-04 20:51:20',
                'updated_at' => '2018-05-04 20:51:20',
            ),
            29 => 
            array (
                'id' => 45,
                'key' => 'add_events',
                'table_name' => 'events',
                'created_at' => '2018-05-04 20:51:20',
                'updated_at' => '2018-05-04 20:51:20',
            ),
            30 => 
            array (
                'id' => 46,
                'key' => 'delete_events',
                'table_name' => 'events',
                'created_at' => '2018-05-04 20:51:20',
                'updated_at' => '2018-05-04 20:51:20',
            ),
            31 => 
            array (
                'id' => 62,
                'key' => 'browse_event_classifications',
                'table_name' => 'event_classifications',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-04 22:12:40',
            ),
            32 => 
            array (
                'id' => 63,
                'key' => 'read_event_classifications',
                'table_name' => 'event_classifications',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-04 22:12:40',
            ),
            33 => 
            array (
                'id' => 64,
                'key' => 'edit_event_classifications',
                'table_name' => 'event_classifications',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-04 22:12:40',
            ),
            34 => 
            array (
                'id' => 65,
                'key' => 'add_event_classifications',
                'table_name' => 'event_classifications',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-04 22:12:40',
            ),
            35 => 
            array (
                'id' => 66,
                'key' => 'delete_event_classifications',
                'table_name' => 'event_classifications',
                'created_at' => '2018-05-04 22:12:40',
                'updated_at' => '2018-05-04 22:12:40',
            ),
            36 => 
            array (
                'id' => 67,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'created_at' => '2018-05-04 22:26:43',
                'updated_at' => '2018-05-04 22:26:43',
            ),
            37 => 
            array (
                'id' => 68,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'created_at' => '2018-05-04 22:26:43',
                'updated_at' => '2018-05-04 22:26:43',
            ),
            38 => 
            array (
                'id' => 69,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'created_at' => '2018-05-04 22:26:44',
                'updated_at' => '2018-05-04 22:26:44',
            ),
            39 => 
            array (
                'id' => 70,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'created_at' => '2018-05-04 22:26:44',
                'updated_at' => '2018-05-04 22:26:44',
            ),
            40 => 
            array (
                'id' => 71,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'created_at' => '2018-05-04 22:26:44',
                'updated_at' => '2018-05-04 22:26:44',
            ),
            41 => 
            array (
                'id' => 72,
                'key' => 'browse_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-04 22:37:10',
            ),
            42 => 
            array (
                'id' => 73,
                'key' => 'read_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-04 22:37:10',
            ),
            43 => 
            array (
                'id' => 74,
                'key' => 'edit_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-04 22:37:10',
            ),
            44 => 
            array (
                'id' => 75,
                'key' => 'add_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-04 22:37:10',
            ),
            45 => 
            array (
                'id' => 76,
                'key' => 'delete_professionals',
                'table_name' => 'professionals',
                'created_at' => '2018-05-04 22:37:10',
                'updated_at' => '2018-05-04 22:37:10',
            ),
            46 => 
            array (
                'id' => 77,
                'key' => 'browse_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            47 => 
            array (
                'id' => 78,
                'key' => 'read_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            48 => 
            array (
                'id' => 79,
                'key' => 'edit_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            49 => 
            array (
                'id' => 80,
                'key' => 'add_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            50 => 
            array (
                'id' => 81,
                'key' => 'delete_customer_types',
                'table_name' => 'customer_types',
                'created_at' => '2018-05-05 15:46:01',
                'updated_at' => '2018-05-05 15:46:01',
            ),
            51 => 
            array (
                'id' => 82,
                'key' => 'browse_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-05-05 16:02:16',
                'updated_at' => '2018-05-05 16:02:16',
            ),
            52 => 
            array (
                'id' => 83,
                'key' => 'read_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-05-05 16:02:16',
                'updated_at' => '2018-05-05 16:02:16',
            ),
            53 => 
            array (
                'id' => 84,
                'key' => 'edit_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-05-05 16:02:16',
                'updated_at' => '2018-05-05 16:02:16',
            ),
            54 => 
            array (
                'id' => 85,
                'key' => 'add_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-05-05 16:02:16',
                'updated_at' => '2018-05-05 16:02:16',
            ),
            55 => 
            array (
                'id' => 86,
                'key' => 'delete_how_did_find_outs',
                'table_name' => 'how_did_find_outs',
                'created_at' => '2018-05-05 16:02:16',
                'updated_at' => '2018-05-05 16:02:16',
            ),
            56 => 
            array (
                'id' => 87,
                'key' => 'browse_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-05-05 16:41:39',
                'updated_at' => '2018-05-05 16:41:39',
            ),
            57 => 
            array (
                'id' => 88,
                'key' => 'read_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-05-05 16:41:39',
                'updated_at' => '2018-05-05 16:41:39',
            ),
            58 => 
            array (
                'id' => 89,
                'key' => 'edit_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-05-05 16:41:39',
                'updated_at' => '2018-05-05 16:41:39',
            ),
            59 => 
            array (
                'id' => 90,
                'key' => 'add_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-05-05 16:41:39',
                'updated_at' => '2018-05-05 16:41:39',
            ),
            60 => 
            array (
                'id' => 91,
                'key' => 'delete_professional_types',
                'table_name' => 'professional_types',
                'created_at' => '2018-05-05 16:41:39',
                'updated_at' => '2018-05-05 16:41:39',
            ),
            61 => 
            array (
                'id' => 92,
                'key' => 'browse_participations',
                'table_name' => 'participations',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-07 18:17:57',
            ),
            62 => 
            array (
                'id' => 102,
                'key' => 'read_participations',
                'table_name' => 'participations',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-07 18:17:57',
            ),
            63 => 
            array (
                'id' => 112,
                'key' => 'edit_participations',
                'table_name' => 'participations',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-07 18:17:57',
            ),
            64 => 
            array (
                'id' => 122,
                'key' => 'add_participations',
                'table_name' => 'participations',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-07 18:17:57',
            ),
            65 => 
            array (
                'id' => 132,
                'key' => 'delete_participations',
                'table_name' => 'participations',
                'created_at' => '2018-05-07 18:17:57',
                'updated_at' => '2018-05-07 18:17:57',
            ),
            66 => 
            array (
                'id' => 141,
                'key' => 'browse_files',
                'table_name' => 'files',
                'created_at' => '2018-05-29 02:48:42',
                'updated_at' => '2018-05-29 02:48:42',
            ),
            67 => 
            array (
                'id' => 151,
                'key' => 'read_files',
                'table_name' => 'files',
                'created_at' => '2018-05-29 02:48:42',
                'updated_at' => '2018-05-29 02:48:42',
            ),
            68 => 
            array (
                'id' => 161,
                'key' => 'edit_files',
                'table_name' => 'files',
                'created_at' => '2018-05-29 02:48:42',
                'updated_at' => '2018-05-29 02:48:42',
            ),
            69 => 
            array (
                'id' => 171,
                'key' => 'add_files',
                'table_name' => 'files',
                'created_at' => '2018-05-29 02:48:42',
                'updated_at' => '2018-05-29 02:48:42',
            ),
            70 => 
            array (
                'id' => 181,
                'key' => 'delete_files',
                'table_name' => 'files',
                'created_at' => '2018-05-29 02:48:42',
                'updated_at' => '2018-05-29 02:48:42',
            ),
        ));
        
        
    }
}