<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 12,
                'role_id' => 1,
                'name' => 'Vanhi',
                'email' => 'vanhi@namastepoa.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$bbsBeIs0yXyQR2LYOCx51OvVwCVQYbMgQEXswCVrdrDLlDvjCb/UW',
                'remember_token' => 'oKqxg0yXTFTbeRofLL4KQdIknbYtNDFyntw6PcfeaQLfzcyhAZaYecmMH22o',
                'settings' => NULL,
                'created_at' => '2018-05-07 18:13:05',
                'updated_at' => '2018-05-07 18:13:05',
            ),
            1 => 
            array (
                'id' => 22,
                'role_id' => 11,
                'name' => 'Amir',
                'email' => 'amir@namaspoa.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$lGCPXYYYmaRITrEa1SO8FeBl0UKCwPGq2Q9KpAvVWo3nNNZatIxKq',
                'remember_token' => '4oEk4RXJzN18guQnm7m0EyddV8N3eEihUUYe6AuUzazhKUtHrvfOv0bs3i60',
                'settings' => NULL,
                'created_at' => '2018-05-07 18:54:27',
                'updated_at' => '2018-05-25 01:26:03',
            ),
            2 => 
            array (
                'id' => 31,
                'role_id' => 11,
                'name' => 'Nisargam',
                'email' => 'nisargam@namaspoa.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$F2iEgp2IzyJXyCMecWmP..oXCgIrjGv7hedVLjZYojP34TyUvUxdm',
                'remember_token' => 'HvGsqz31NtjqNGGbpd4GmNwhRws7kqADDrSfr77uKLDsz5UJsdy4DE7ZRqN9',
                'settings' => NULL,
                'created_at' => '2018-05-07 18:59:06',
                'updated_at' => '2018-05-07 18:59:06',
            ),
            3 => 
            array (
                'id' => 41,
                'role_id' => 3,
                'name' => 'Rutajit',
                'email' => 'rutajit@namaspoa.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$PnpOba3D.Hf36LWR.zpBwevygEIvEPoeuPstMzd1CuEDxZQkyeXIq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2018-05-07 19:07:19',
                'updated_at' => '2018-05-07 19:07:19',
            ),
            4 => 
            array (
                'id' => 42,
                'role_id' => 1,
                'name' => 'Jwala',
                'email' => 'jwala@namaspoa.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$uHJEQCyZMSL84L2yCdS7qOJTiLdVrHhXn82yPQFAQJD8rTqfGQqy6',
                'remember_token' => 'u2Y65F0BY1DYSfr7osG8oE4MEPMrvllQG9qbSCmt0DTGpWpGPHIAOYGfknCH',
                'settings' => NULL,
                'created_at' => '2018-05-07 19:16:37',
                'updated_at' => '2018-05-07 19:16:37',
            ),
        ));
        
        
    }
}