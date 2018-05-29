<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 11,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 11,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 11,
            ),
            6 => 
            array (
                'permission_id' => 4,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 11,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'role_id' => 11,
            ),
            9 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 6,
                'role_id' => 11,
            ),
            11 => 
            array (
                'permission_id' => 7,
                'role_id' => 3,
            ),
            12 => 
            array (
                'permission_id' => 7,
                'role_id' => 11,
            ),
            13 => 
            array (
                'permission_id' => 8,
                'role_id' => 3,
            ),
            14 => 
            array (
                'permission_id' => 8,
                'role_id' => 11,
            ),
            15 => 
            array (
                'permission_id' => 9,
                'role_id' => 3,
            ),
            16 => 
            array (
                'permission_id' => 9,
                'role_id' => 11,
            ),
            17 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            18 => 
            array (
                'permission_id' => 10,
                'role_id' => 11,
            ),
            19 => 
            array (
                'permission_id' => 11,
                'role_id' => 11,
            ),
            20 => 
            array (
                'permission_id' => 12,
                'role_id' => 11,
            ),
            21 => 
            array (
                'permission_id' => 13,
                'role_id' => 11,
            ),
            22 => 
            array (
                'permission_id' => 14,
                'role_id' => 11,
            ),
            23 => 
            array (
                'permission_id' => 15,
                'role_id' => 11,
            ),
            24 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            26 => 
            array (
                'permission_id' => 16,
                'role_id' => 11,
            ),
            27 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 17,
                'role_id' => 11,
            ),
            30 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 18,
                'role_id' => 3,
            ),
            32 => 
            array (
                'permission_id' => 18,
                'role_id' => 11,
            ),
            33 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 19,
                'role_id' => 3,
            ),
            35 => 
            array (
                'permission_id' => 19,
                'role_id' => 11,
            ),
            36 => 
            array (
                'permission_id' => 20,
                'role_id' => 11,
            ),
            37 => 
            array (
                'permission_id' => 21,
                'role_id' => 11,
            ),
            38 => 
            array (
                'permission_id' => 22,
                'role_id' => 11,
            ),
            39 => 
            array (
                'permission_id' => 23,
                'role_id' => 11,
            ),
            40 => 
            array (
                'permission_id' => 24,
                'role_id' => 11,
            ),
            41 => 
            array (
                'permission_id' => 25,
                'role_id' => 11,
            ),
            42 => 
            array (
                'permission_id' => 41,
                'role_id' => 11,
            ),
            43 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            45 => 
            array (
                'permission_id' => 42,
                'role_id' => 11,
            ),
            46 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            48 => 
            array (
                'permission_id' => 43,
                'role_id' => 11,
            ),
            49 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            51 => 
            array (
                'permission_id' => 44,
                'role_id' => 11,
            ),
            52 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 45,
                'role_id' => 3,
            ),
            54 => 
            array (
                'permission_id' => 45,
                'role_id' => 11,
            ),
            55 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            57 => 
            array (
                'permission_id' => 46,
                'role_id' => 11,
            ),
            58 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 62,
                'role_id' => 3,
            ),
            60 => 
            array (
                'permission_id' => 62,
                'role_id' => 11,
            ),
            61 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 63,
                'role_id' => 3,
            ),
            63 => 
            array (
                'permission_id' => 63,
                'role_id' => 11,
            ),
            64 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 64,
                'role_id' => 3,
            ),
            66 => 
            array (
                'permission_id' => 64,
                'role_id' => 11,
            ),
            67 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 65,
                'role_id' => 3,
            ),
            69 => 
            array (
                'permission_id' => 65,
                'role_id' => 11,
            ),
            70 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 66,
                'role_id' => 3,
            ),
            72 => 
            array (
                'permission_id' => 66,
                'role_id' => 11,
            ),
            73 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            75 => 
            array (
                'permission_id' => 67,
                'role_id' => 3,
            ),
            76 => 
            array (
                'permission_id' => 67,
                'role_id' => 11,
            ),
            77 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            79 => 
            array (
                'permission_id' => 68,
                'role_id' => 3,
            ),
            80 => 
            array (
                'permission_id' => 68,
                'role_id' => 11,
            ),
            81 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            83 => 
            array (
                'permission_id' => 69,
                'role_id' => 3,
            ),
            84 => 
            array (
                'permission_id' => 69,
                'role_id' => 11,
            ),
            85 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            87 => 
            array (
                'permission_id' => 70,
                'role_id' => 3,
            ),
            88 => 
            array (
                'permission_id' => 70,
                'role_id' => 11,
            ),
            89 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            91 => 
            array (
                'permission_id' => 71,
                'role_id' => 3,
            ),
            92 => 
            array (
                'permission_id' => 71,
                'role_id' => 11,
            ),
            93 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 72,
                'role_id' => 3,
            ),
            95 => 
            array (
                'permission_id' => 72,
                'role_id' => 11,
            ),
            96 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 73,
                'role_id' => 3,
            ),
            98 => 
            array (
                'permission_id' => 73,
                'role_id' => 11,
            ),
            99 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 74,
                'role_id' => 3,
            ),
            101 => 
            array (
                'permission_id' => 74,
                'role_id' => 11,
            ),
            102 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 75,
                'role_id' => 3,
            ),
            104 => 
            array (
                'permission_id' => 75,
                'role_id' => 11,
            ),
            105 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 76,
                'role_id' => 3,
            ),
            107 => 
            array (
                'permission_id' => 76,
                'role_id' => 11,
            ),
            108 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 77,
                'role_id' => 3,
            ),
            110 => 
            array (
                'permission_id' => 77,
                'role_id' => 11,
            ),
            111 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 78,
                'role_id' => 3,
            ),
            113 => 
            array (
                'permission_id' => 78,
                'role_id' => 11,
            ),
            114 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 79,
                'role_id' => 3,
            ),
            116 => 
            array (
                'permission_id' => 79,
                'role_id' => 11,
            ),
            117 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            118 => 
            array (
                'permission_id' => 80,
                'role_id' => 3,
            ),
            119 => 
            array (
                'permission_id' => 80,
                'role_id' => 11,
            ),
            120 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 81,
                'role_id' => 3,
            ),
            122 => 
            array (
                'permission_id' => 81,
                'role_id' => 11,
            ),
            123 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 82,
                'role_id' => 3,
            ),
            125 => 
            array (
                'permission_id' => 82,
                'role_id' => 11,
            ),
            126 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 83,
                'role_id' => 3,
            ),
            128 => 
            array (
                'permission_id' => 83,
                'role_id' => 11,
            ),
            129 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 84,
                'role_id' => 3,
            ),
            131 => 
            array (
                'permission_id' => 84,
                'role_id' => 11,
            ),
            132 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 85,
                'role_id' => 3,
            ),
            134 => 
            array (
                'permission_id' => 85,
                'role_id' => 11,
            ),
            135 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 86,
                'role_id' => 3,
            ),
            137 => 
            array (
                'permission_id' => 86,
                'role_id' => 11,
            ),
            138 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 87,
                'role_id' => 3,
            ),
            140 => 
            array (
                'permission_id' => 87,
                'role_id' => 11,
            ),
            141 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 88,
                'role_id' => 3,
            ),
            143 => 
            array (
                'permission_id' => 88,
                'role_id' => 11,
            ),
            144 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 89,
                'role_id' => 3,
            ),
            146 => 
            array (
                'permission_id' => 89,
                'role_id' => 11,
            ),
            147 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 90,
                'role_id' => 3,
            ),
            149 => 
            array (
                'permission_id' => 90,
                'role_id' => 11,
            ),
            150 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            151 => 
            array (
                'permission_id' => 91,
                'role_id' => 3,
            ),
            152 => 
            array (
                'permission_id' => 91,
                'role_id' => 11,
            ),
            153 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 92,
                'role_id' => 2,
            ),
            155 => 
            array (
                'permission_id' => 92,
                'role_id' => 3,
            ),
            156 => 
            array (
                'permission_id' => 92,
                'role_id' => 11,
            ),
            157 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            158 => 
            array (
                'permission_id' => 102,
                'role_id' => 2,
            ),
            159 => 
            array (
                'permission_id' => 102,
                'role_id' => 3,
            ),
            160 => 
            array (
                'permission_id' => 102,
                'role_id' => 11,
            ),
            161 => 
            array (
                'permission_id' => 112,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 112,
                'role_id' => 2,
            ),
            163 => 
            array (
                'permission_id' => 112,
                'role_id' => 3,
            ),
            164 => 
            array (
                'permission_id' => 112,
                'role_id' => 11,
            ),
            165 => 
            array (
                'permission_id' => 122,
                'role_id' => 1,
            ),
            166 => 
            array (
                'permission_id' => 122,
                'role_id' => 2,
            ),
            167 => 
            array (
                'permission_id' => 122,
                'role_id' => 3,
            ),
            168 => 
            array (
                'permission_id' => 122,
                'role_id' => 11,
            ),
            169 => 
            array (
                'permission_id' => 132,
                'role_id' => 1,
            ),
            170 => 
            array (
                'permission_id' => 132,
                'role_id' => 2,
            ),
            171 => 
            array (
                'permission_id' => 132,
                'role_id' => 3,
            ),
            172 => 
            array (
                'permission_id' => 132,
                'role_id' => 11,
            ),
            173 => 
            array (
                'permission_id' => 141,
                'role_id' => 1,
            ),
            174 => 
            array (
                'permission_id' => 141,
                'role_id' => 2,
            ),
            175 => 
            array (
                'permission_id' => 141,
                'role_id' => 3,
            ),
            176 => 
            array (
                'permission_id' => 141,
                'role_id' => 11,
            ),
            177 => 
            array (
                'permission_id' => 151,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 151,
                'role_id' => 2,
            ),
            179 => 
            array (
                'permission_id' => 151,
                'role_id' => 3,
            ),
            180 => 
            array (
                'permission_id' => 151,
                'role_id' => 11,
            ),
            181 => 
            array (
                'permission_id' => 161,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 161,
                'role_id' => 2,
            ),
            183 => 
            array (
                'permission_id' => 161,
                'role_id' => 3,
            ),
            184 => 
            array (
                'permission_id' => 161,
                'role_id' => 11,
            ),
            185 => 
            array (
                'permission_id' => 171,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 171,
                'role_id' => 2,
            ),
            187 => 
            array (
                'permission_id' => 171,
                'role_id' => 3,
            ),
            188 => 
            array (
                'permission_id' => 171,
                'role_id' => 11,
            ),
            189 => 
            array (
                'permission_id' => 181,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 181,
                'role_id' => 2,
            ),
            191 => 
            array (
                'permission_id' => 181,
                'role_id' => 3,
            ),
            192 => 
            array (
                'permission_id' => 181,
                'role_id' => 11,
            ),
        ));
        
        
    }
}