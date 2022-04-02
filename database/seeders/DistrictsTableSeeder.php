<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 36,
                'district_title' => 'Anantnag',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            1 => 
            array (
                'id' => 37,
                'district_title' => 'Bandipore',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            2 => 
            array (
                'id' => 38,
                'district_title' => 'Baramulla',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            3 => 
            array (
                'id' => 39,
                'district_title' => 'Budgam',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            4 => 
            array (
                'id' => 40,
                'district_title' => 'Doda',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            5 => 
            array (
                'id' => 41,
                'district_title' => 'Ganderbal',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            6 => 
            array (
                'id' => 42,
                'district_title' => 'Jammu',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            7 => 
            array (
                'id' => 43,
                'district_title' => 'Kargil',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            8 => 
            array (
                'id' => 44,
                'district_title' => 'Kathua',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            9 => 
            array (
                'id' => 45,
                'district_title' => 'Kishtwar',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            10 => 
            array (
                'id' => 46,
                'district_title' => 'Kulgam',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            11 => 
            array (
                'id' => 47,
                'district_title' => 'Kupwara',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            12 => 
            array (
                'id' => 48,
            'district_title' => 'Leh (Ladakh)',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            13 => 
            array (
                'id' => 49,
                'district_title' => 'Poonch',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            14 => 
            array (
                'id' => 50,
                'district_title' => 'Pulwama',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            15 => 
            array (
                'id' => 51,
                'district_title' => 'Rajouri',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            16 => 
            array (
                'id' => 52,
                'district_title' => 'Ramban',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            17 => 
            array (
                'id' => 53,
                'district_title' => 'Reasi',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            18 => 
            array (
                'id' => 54,
                'district_title' => 'Samba',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            19 => 
            array (
                'id' => 55,
                'district_title' => 'Shopian',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            20 => 
            array (
                'id' => 56,
                'district_title' => 'Srinagar',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            21 => 
            array (
                'id' => 57,
                'district_title' => 'Udhampur',
                'state_id' => 15,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            22 => 
            array (
                'id' => 58,
            'district_title' => 'Bilaspur (Himachal Pradesh)',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            23 => 
            array (
                'id' => 59,
                'district_title' => 'Chamba',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            24 => 
            array (
                'id' => 60,
            'district_title' => 'Hamirpur (Himachal Pradesh)',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            25 => 
            array (
                'id' => 61,
                'district_title' => 'Kangra',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            26 => 
            array (
                'id' => 62,
                'district_title' => 'Kinnaur',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            27 => 
            array (
                'id' => 63,
                'district_title' => 'Kullu',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            28 => 
            array (
                'id' => 64,
                'district_title' => 'Lahul & Spiti',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            29 => 
            array (
                'id' => 65,
                'district_title' => 'Mandi',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            30 => 
            array (
                'id' => 66,
                'district_title' => 'Shimla',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            31 => 
            array (
                'id' => 67,
                'district_title' => 'Sirmaur',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            32 => 
            array (
                'id' => 68,
                'district_title' => 'Solan',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            33 => 
            array (
                'id' => 69,
                'district_title' => 'Una',
                'state_id' => 14,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            34 => 
            array (
                'id' => 70,
                'district_title' => 'Amritsar',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            35 => 
            array (
                'id' => 71,
                'district_title' => 'Barnala',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            36 => 
            array (
                'id' => 72,
                'district_title' => 'Bathinda',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            37 => 
            array (
                'id' => 73,
                'district_title' => 'Faridkot',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            38 => 
            array (
                'id' => 74,
                'district_title' => 'Fatehgarh Sahib',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            39 => 
            array (
                'id' => 75,
                'district_title' => 'Firozpur',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            40 => 
            array (
                'id' => 76,
                'district_title' => 'Gurdaspur',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            41 => 
            array (
                'id' => 77,
                'district_title' => 'Hoshiarpur',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            42 => 
            array (
                'id' => 78,
                'district_title' => 'Jalandhar',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            43 => 
            array (
                'id' => 79,
                'district_title' => 'Kapurthala',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            44 => 
            array (
                'id' => 80,
                'district_title' => 'Ludhiana',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            45 => 
            array (
                'id' => 81,
                'district_title' => 'Mansa',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            46 => 
            array (
                'id' => 82,
                'district_title' => 'Moga',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            47 => 
            array (
                'id' => 83,
                'district_title' => 'Muktsar',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            48 => 
            array (
                'id' => 84,
                'district_title' => 'Patiala',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            49 => 
            array (
                'id' => 85,
            'district_title' => 'Rupnagar (Ropar)',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            50 => 
            array (
                'id' => 86,
            'district_title' => 'Sahibzada Ajit Singh Nagar (Mohali)',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            51 => 
            array (
                'id' => 87,
                'district_title' => 'Sangrur',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            52 => 
            array (
                'id' => 88,
            'district_title' => 'Shahid Bhagat Singh Nagar (Nawanshahr)',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            53 => 
            array (
                'id' => 89,
                'district_title' => 'Tarn Taran',
                'state_id' => 28,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            54 => 
            array (
                'id' => 90,
                'district_title' => 'Chandigarh',
                'state_id' => 6,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            55 => 
            array (
                'id' => 91,
                'district_title' => 'Almora',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            56 => 
            array (
                'id' => 92,
                'district_title' => 'Bageshwar',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            57 => 
            array (
                'id' => 93,
                'district_title' => 'Chamoli',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            58 => 
            array (
                'id' => 94,
                'district_title' => 'Champawat',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            59 => 
            array (
                'id' => 95,
                'district_title' => 'Dehradun',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            60 => 
            array (
                'id' => 96,
                'district_title' => 'Haridwar',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            61 => 
            array (
                'id' => 97,
                'district_title' => 'Nainital',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            62 => 
            array (
                'id' => 98,
                'district_title' => 'Pauri Garhwal',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            63 => 
            array (
                'id' => 99,
                'district_title' => 'Pithoragarh',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            64 => 
            array (
                'id' => 100,
                'district_title' => 'Rudraprayag',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            65 => 
            array (
                'id' => 101,
                'district_title' => 'Tehri Garhwal',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            66 => 
            array (
                'id' => 102,
                'district_title' => 'Udham Singh Nagar',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            67 => 
            array (
                'id' => 103,
                'district_title' => 'Uttarkashi',
                'state_id' => 34,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            68 => 
            array (
                'id' => 104,
                'district_title' => 'Ambala',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            69 => 
            array (
                'id' => 105,
                'district_title' => 'Bhiwani',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            70 => 
            array (
                'id' => 106,
                'district_title' => 'Faridabad',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            71 => 
            array (
                'id' => 107,
                'district_title' => 'Fatehabad',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            72 => 
            array (
                'id' => 108,
                'district_title' => 'Gurgaon',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            73 => 
            array (
                'id' => 109,
                'district_title' => 'Hisar',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            74 => 
            array (
                'id' => 110,
                'district_title' => 'Jhajjar',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            75 => 
            array (
                'id' => 111,
                'district_title' => 'Jind',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            76 => 
            array (
                'id' => 112,
                'district_title' => 'Kaithal',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            77 => 
            array (
                'id' => 113,
                'district_title' => 'Karnal',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            78 => 
            array (
                'id' => 114,
                'district_title' => 'Kurukshetra',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            79 => 
            array (
                'id' => 115,
                'district_title' => 'Mahendragarh',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            80 => 
            array (
                'id' => 116,
                'district_title' => 'Mewat',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            81 => 
            array (
                'id' => 117,
                'district_title' => 'Palwal',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            82 => 
            array (
                'id' => 118,
                'district_title' => 'Panchkula',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            83 => 
            array (
                'id' => 119,
                'district_title' => 'Panipat',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            84 => 
            array (
                'id' => 120,
                'district_title' => 'Rewari',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            85 => 
            array (
                'id' => 121,
                'district_title' => 'Rohtak',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            86 => 
            array (
                'id' => 122,
                'district_title' => 'Sirsa',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            87 => 
            array (
                'id' => 123,
                'district_title' => 'Sonipat',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            88 => 
            array (
                'id' => 124,
                'district_title' => 'Yamuna Nagar',
                'state_id' => 13,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            89 => 
            array (
                'id' => 125,
                'district_title' => 'Central Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            90 => 
            array (
                'id' => 126,
                'district_title' => 'East Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            91 => 
            array (
                'id' => 127,
                'district_title' => 'New Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            92 => 
            array (
                'id' => 128,
                'district_title' => 'North Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            93 => 
            array (
                'id' => 129,
                'district_title' => 'North East Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            94 => 
            array (
                'id' => 130,
                'district_title' => 'North West Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            95 => 
            array (
                'id' => 131,
                'district_title' => 'South Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            96 => 
            array (
                'id' => 132,
                'district_title' => 'South West Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            97 => 
            array (
                'id' => 133,
                'district_title' => 'West Delhi',
                'state_id' => 10,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            98 => 
            array (
                'id' => 134,
                'district_title' => 'Ajmer',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            99 => 
            array (
                'id' => 135,
                'district_title' => 'Alwar',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            100 => 
            array (
                'id' => 136,
                'district_title' => 'Banswara',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            101 => 
            array (
                'id' => 137,
                'district_title' => 'Baran',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            102 => 
            array (
                'id' => 138,
                'district_title' => 'Barmer',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            103 => 
            array (
                'id' => 139,
                'district_title' => 'Bharatpur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            104 => 
            array (
                'id' => 140,
                'district_title' => 'Bhilwara',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            105 => 
            array (
                'id' => 141,
                'district_title' => 'Bikaner',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            106 => 
            array (
                'id' => 142,
                'district_title' => 'Bundi',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            107 => 
            array (
                'id' => 143,
                'district_title' => 'Chittorgarh',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            108 => 
            array (
                'id' => 144,
                'district_title' => 'Churu',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            109 => 
            array (
                'id' => 145,
                'district_title' => 'Dausa',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            110 => 
            array (
                'id' => 146,
                'district_title' => 'Dholpur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            111 => 
            array (
                'id' => 147,
                'district_title' => 'Dungarpur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            112 => 
            array (
                'id' => 148,
                'district_title' => 'Ganganagar',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            113 => 
            array (
                'id' => 149,
                'district_title' => 'Hanumangarh',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            114 => 
            array (
                'id' => 150,
                'district_title' => 'Jaipur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            115 => 
            array (
                'id' => 151,
                'district_title' => 'Jaisalmer',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            116 => 
            array (
                'id' => 152,
                'district_title' => 'Jalor',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            117 => 
            array (
                'id' => 153,
                'district_title' => 'Jhalawar',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            118 => 
            array (
                'id' => 154,
                'district_title' => 'Jhunjhunu',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            119 => 
            array (
                'id' => 155,
                'district_title' => 'Jodhpur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            120 => 
            array (
                'id' => 156,
                'district_title' => 'Karauli',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            121 => 
            array (
                'id' => 157,
                'district_title' => 'Kota',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            122 => 
            array (
                'id' => 158,
                'district_title' => 'Nagaur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            123 => 
            array (
                'id' => 159,
                'district_title' => 'Pali',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            124 => 
            array (
                'id' => 160,
            'district_title' => 'Pratapgarh (Rajasthan)',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            125 => 
            array (
                'id' => 161,
                'district_title' => 'Rajsamand',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            126 => 
            array (
                'id' => 162,
                'district_title' => 'Sawai Madhopur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            127 => 
            array (
                'id' => 163,
                'district_title' => 'Sikar',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            128 => 
            array (
                'id' => 164,
                'district_title' => 'Sirohi',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            129 => 
            array (
                'id' => 165,
                'district_title' => 'Tonk',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            130 => 
            array (
                'id' => 166,
                'district_title' => 'Udaipur',
                'state_id' => 29,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            131 => 
            array (
                'id' => 167,
                'district_title' => 'Agra',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            132 => 
            array (
                'id' => 168,
                'district_title' => 'Aligarh',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            133 => 
            array (
                'id' => 169,
                'district_title' => 'Allahabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            134 => 
            array (
                'id' => 170,
                'district_title' => 'Ambedkar Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            135 => 
            array (
                'id' => 171,
                'district_title' => 'Auraiya',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            136 => 
            array (
                'id' => 172,
                'district_title' => 'Azamgarh',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            137 => 
            array (
                'id' => 173,
                'district_title' => 'Bagpat',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            138 => 
            array (
                'id' => 174,
                'district_title' => 'Bahraich',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            139 => 
            array (
                'id' => 175,
                'district_title' => 'Ballia',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            140 => 
            array (
                'id' => 176,
                'district_title' => 'Balrampur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            141 => 
            array (
                'id' => 177,
                'district_title' => 'Banda',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            142 => 
            array (
                'id' => 178,
                'district_title' => 'Barabanki',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            143 => 
            array (
                'id' => 179,
                'district_title' => 'Bareilly',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            144 => 
            array (
                'id' => 180,
                'district_title' => 'Basti',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            145 => 
            array (
                'id' => 181,
                'district_title' => 'Bijnor',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            146 => 
            array (
                'id' => 182,
                'district_title' => 'Budaun',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            147 => 
            array (
                'id' => 183,
                'district_title' => 'Bulandshahr',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            148 => 
            array (
                'id' => 184,
                'district_title' => 'Chandauli',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            149 => 
            array (
                'id' => 185,
                'district_title' => 'Chitrakoot',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            150 => 
            array (
                'id' => 186,
                'district_title' => 'Deoria',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            151 => 
            array (
                'id' => 187,
                'district_title' => 'Etah',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            152 => 
            array (
                'id' => 188,
                'district_title' => 'Etawah',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            153 => 
            array (
                'id' => 189,
                'district_title' => 'Faizabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            154 => 
            array (
                'id' => 190,
                'district_title' => 'Farrukhabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            155 => 
            array (
                'id' => 191,
                'district_title' => 'Fatehpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            156 => 
            array (
                'id' => 192,
                'district_title' => 'Firozabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            157 => 
            array (
                'id' => 193,
                'district_title' => 'Gautam Buddha Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            158 => 
            array (
                'id' => 194,
                'district_title' => 'Ghaziabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            159 => 
            array (
                'id' => 195,
                'district_title' => 'Ghazipur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            160 => 
            array (
                'id' => 196,
                'district_title' => 'Gonda',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            161 => 
            array (
                'id' => 197,
                'district_title' => 'Gorakhpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            162 => 
            array (
                'id' => 198,
                'district_title' => 'Hamirpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            163 => 
            array (
                'id' => 199,
                'district_title' => 'Hardoi',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            164 => 
            array (
                'id' => 200,
                'district_title' => 'Hathras',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            165 => 
            array (
                'id' => 201,
                'district_title' => 'Jalaun',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            166 => 
            array (
                'id' => 202,
                'district_title' => 'Jaunpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            167 => 
            array (
                'id' => 203,
                'district_title' => 'Jhansi',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            168 => 
            array (
                'id' => 204,
                'district_title' => 'Jyotiba Phule Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            169 => 
            array (
                'id' => 205,
                'district_title' => 'Kannauj',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            170 => 
            array (
                'id' => 206,
                'district_title' => 'Kanpur Dehat',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            171 => 
            array (
                'id' => 207,
                'district_title' => 'Kanpur Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            172 => 
            array (
                'id' => 208,
                'district_title' => 'Kanshiram Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            173 => 
            array (
                'id' => 209,
                'district_title' => 'Kaushambi',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            174 => 
            array (
                'id' => 210,
                'district_title' => 'Kheri',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            175 => 
            array (
                'id' => 211,
                'district_title' => 'Kushinagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            176 => 
            array (
                'id' => 212,
                'district_title' => 'Lalitpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            177 => 
            array (
                'id' => 213,
                'district_title' => 'Lucknow',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            178 => 
            array (
                'id' => 214,
                'district_title' => 'Maharajganj',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            179 => 
            array (
                'id' => 215,
                'district_title' => 'Mahoba',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            180 => 
            array (
                'id' => 216,
                'district_title' => 'Mainpuri',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            181 => 
            array (
                'id' => 217,
                'district_title' => 'Mathura',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            182 => 
            array (
                'id' => 218,
                'district_title' => 'Mau',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            183 => 
            array (
                'id' => 219,
                'district_title' => 'Meerut',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            184 => 
            array (
                'id' => 220,
                'district_title' => 'Mirzapur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            185 => 
            array (
                'id' => 221,
                'district_title' => 'Moradabad',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            186 => 
            array (
                'id' => 222,
                'district_title' => 'Muzaffarnagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            187 => 
            array (
                'id' => 223,
                'district_title' => 'Pilibhit',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            188 => 
            array (
                'id' => 224,
                'district_title' => 'Pratapgarh',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            189 => 
            array (
                'id' => 225,
                'district_title' => 'Rae Bareli',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            190 => 
            array (
                'id' => 226,
                'district_title' => 'Rampur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            191 => 
            array (
                'id' => 227,
                'district_title' => 'Saharanpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            192 => 
            array (
                'id' => 228,
                'district_title' => 'Sant Kabir Nagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            193 => 
            array (
                'id' => 229,
            'district_title' => 'Sant Ravidas Nagar (Bhadohi)',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            194 => 
            array (
                'id' => 230,
                'district_title' => 'Shahjahanpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            195 => 
            array (
                'id' => 231,
                'district_title' => 'Shrawasti',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            196 => 
            array (
                'id' => 232,
                'district_title' => 'Siddharthnagar',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            197 => 
            array (
                'id' => 233,
                'district_title' => 'Sitapur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            198 => 
            array (
                'id' => 234,
                'district_title' => 'Sonbhadra',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            199 => 
            array (
                'id' => 235,
                'district_title' => 'Sultanpur',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            200 => 
            array (
                'id' => 236,
                'district_title' => 'Unnao',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            201 => 
            array (
                'id' => 237,
                'district_title' => 'Varanasi',
                'state_id' => 33,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            202 => 
            array (
                'id' => 238,
                'district_title' => 'Araria',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            203 => 
            array (
                'id' => 239,
                'district_title' => 'Arwal',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            204 => 
            array (
                'id' => 240,
            'district_title' => 'Aurangabad (Bihar)',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            205 => 
            array (
                'id' => 241,
                'district_title' => 'Banka',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            206 => 
            array (
                'id' => 242,
                'district_title' => 'Begusarai',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            207 => 
            array (
                'id' => 243,
                'district_title' => 'Bhagalpur',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            208 => 
            array (
                'id' => 244,
                'district_title' => 'Bhojpur',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            209 => 
            array (
                'id' => 245,
                'district_title' => 'Buxar',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            210 => 
            array (
                'id' => 246,
                'district_title' => 'Darbhanga',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            211 => 
            array (
                'id' => 247,
                'district_title' => 'East Champaran',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            212 => 
            array (
                'id' => 248,
                'district_title' => 'Gaya',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            213 => 
            array (
                'id' => 249,
                'district_title' => 'Gopalganj',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            214 => 
            array (
                'id' => 250,
                'district_title' => 'Jamui',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            215 => 
            array (
                'id' => 251,
                'district_title' => 'Jehanabad',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            216 => 
            array (
                'id' => 252,
            'district_title' => 'Kaimur (Bhabua)',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            217 => 
            array (
                'id' => 253,
                'district_title' => 'Katihar',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            218 => 
            array (
                'id' => 254,
                'district_title' => 'Khagaria',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            219 => 
            array (
                'id' => 255,
                'district_title' => 'Kishanganj',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            220 => 
            array (
                'id' => 256,
                'district_title' => 'Lakhisarai',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            221 => 
            array (
                'id' => 257,
                'district_title' => 'Madhepura',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            222 => 
            array (
                'id' => 258,
                'district_title' => 'Madhubani',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            223 => 
            array (
                'id' => 259,
                'district_title' => 'Munger',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            224 => 
            array (
                'id' => 260,
                'district_title' => 'Muzaffarpur',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            225 => 
            array (
                'id' => 261,
                'district_title' => 'Nalanda',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            226 => 
            array (
                'id' => 262,
                'district_title' => 'Nawada',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            227 => 
            array (
                'id' => 263,
                'district_title' => 'Patna',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            228 => 
            array (
                'id' => 264,
                'district_title' => 'Purnia',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            229 => 
            array (
                'id' => 265,
                'district_title' => 'Rohtas',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            230 => 
            array (
                'id' => 266,
                'district_title' => 'Saharsa',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            231 => 
            array (
                'id' => 267,
                'district_title' => 'Samastipur',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            232 => 
            array (
                'id' => 268,
                'district_title' => 'Saran',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            233 => 
            array (
                'id' => 269,
                'district_title' => 'Sheikhpura',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            234 => 
            array (
                'id' => 270,
                'district_title' => 'Sheohar',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            235 => 
            array (
                'id' => 271,
                'district_title' => 'Sitamarhi',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            236 => 
            array (
                'id' => 272,
                'district_title' => 'Siwan',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            237 => 
            array (
                'id' => 273,
                'district_title' => 'Supaul',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            238 => 
            array (
                'id' => 274,
                'district_title' => 'Vaishali',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            239 => 
            array (
                'id' => 275,
                'district_title' => 'West Champaran',
                'state_id' => 5,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            240 => 
            array (
                'id' => 276,
                'district_title' => 'East Sikkim',
                'state_id' => 30,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            241 => 
            array (
                'id' => 277,
                'district_title' => 'North Sikkim',
                'state_id' => 30,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            242 => 
            array (
                'id' => 278,
                'district_title' => 'South Sikkim',
                'state_id' => 30,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            243 => 
            array (
                'id' => 279,
                'district_title' => 'West Sikkim',
                'state_id' => 30,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            244 => 
            array (
                'id' => 280,
                'district_title' => 'Anjaw',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            245 => 
            array (
                'id' => 281,
                'district_title' => 'Changlang',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            246 => 
            array (
                'id' => 282,
                'district_title' => 'Dibang Valley',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            247 => 
            array (
                'id' => 283,
                'district_title' => 'East Kameng',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            248 => 
            array (
                'id' => 284,
                'district_title' => 'East Siang',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            249 => 
            array (
                'id' => 285,
                'district_title' => 'Kurung Kumey',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            250 => 
            array (
                'id' => 286,
                'district_title' => 'Lohit',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            251 => 
            array (
                'id' => 287,
                'district_title' => 'Lower Dibang Valley',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            252 => 
            array (
                'id' => 288,
                'district_title' => 'Lower Subansiri',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            253 => 
            array (
                'id' => 289,
                'district_title' => 'Papum Pare',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            254 => 
            array (
                'id' => 290,
                'district_title' => 'Tawang',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            255 => 
            array (
                'id' => 291,
                'district_title' => 'Tirap',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            256 => 
            array (
                'id' => 292,
                'district_title' => 'Upper Siang',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            257 => 
            array (
                'id' => 293,
                'district_title' => 'Upper Subansiri',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            258 => 
            array (
                'id' => 294,
                'district_title' => 'West Kameng',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            259 => 
            array (
                'id' => 295,
                'district_title' => 'West Siang',
                'state_id' => 3,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            260 => 
            array (
                'id' => 296,
                'district_title' => 'Dimapur',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            261 => 
            array (
                'id' => 297,
                'district_title' => 'Kiphire',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            262 => 
            array (
                'id' => 298,
                'district_title' => 'Kohima',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            263 => 
            array (
                'id' => 299,
                'district_title' => 'Longleng',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            264 => 
            array (
                'id' => 300,
                'district_title' => 'Mokokchung',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            265 => 
            array (
                'id' => 301,
                'district_title' => 'Mon',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            266 => 
            array (
                'id' => 302,
                'district_title' => 'Peren',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            267 => 
            array (
                'id' => 303,
                'district_title' => 'Phek',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            268 => 
            array (
                'id' => 304,
                'district_title' => 'Tuensang',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            269 => 
            array (
                'id' => 305,
                'district_title' => 'Wokha',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            270 => 
            array (
                'id' => 306,
                'district_title' => 'Zunheboto',
                'state_id' => 25,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            271 => 
            array (
                'id' => 307,
                'district_title' => 'Bishnupur',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            272 => 
            array (
                'id' => 308,
                'district_title' => 'Chandel',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            273 => 
            array (
                'id' => 309,
                'district_title' => 'Churachandpur',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            274 => 
            array (
                'id' => 310,
                'district_title' => 'Imphal East',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            275 => 
            array (
                'id' => 311,
                'district_title' => 'Imphal West',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            276 => 
            array (
                'id' => 312,
                'district_title' => 'Senapati',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            277 => 
            array (
                'id' => 313,
                'district_title' => 'Tamenglong',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            278 => 
            array (
                'id' => 314,
                'district_title' => 'Thoubal',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            279 => 
            array (
                'id' => 315,
                'district_title' => 'Ukhrul',
                'state_id' => 22,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            280 => 
            array (
                'id' => 316,
                'district_title' => 'Aizawl',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            281 => 
            array (
                'id' => 317,
                'district_title' => 'Champhai',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            282 => 
            array (
                'id' => 318,
                'district_title' => 'Kolasib',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            283 => 
            array (
                'id' => 319,
                'district_title' => 'Lawngtlai',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            284 => 
            array (
                'id' => 320,
                'district_title' => 'Lunglei',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            285 => 
            array (
                'id' => 321,
                'district_title' => 'Mamit',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            286 => 
            array (
                'id' => 322,
                'district_title' => 'Saiha',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            287 => 
            array (
                'id' => 323,
                'district_title' => 'Serchhip',
                'state_id' => 24,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            288 => 
            array (
                'id' => 324,
                'district_title' => 'Dhalai',
                'state_id' => 32,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            289 => 
            array (
                'id' => 325,
                'district_title' => 'North Tripura',
                'state_id' => 32,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            290 => 
            array (
                'id' => 326,
                'district_title' => 'South Tripura',
                'state_id' => 32,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            291 => 
            array (
                'id' => 327,
                'district_title' => 'West Tripura',
                'state_id' => 32,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            292 => 
            array (
                'id' => 328,
                'district_title' => 'East Garo Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            293 => 
            array (
                'id' => 329,
                'district_title' => 'East Khasi Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            294 => 
            array (
                'id' => 330,
                'district_title' => 'Jaintia Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            295 => 
            array (
                'id' => 331,
                'district_title' => 'Ri Bhoi',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            296 => 
            array (
                'id' => 332,
                'district_title' => 'South Garo Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            297 => 
            array (
                'id' => 333,
                'district_title' => 'West Garo Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            298 => 
            array (
                'id' => 334,
                'district_title' => 'West Khasi Hills',
                'state_id' => 23,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            299 => 
            array (
                'id' => 335,
                'district_title' => 'Baksa',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            300 => 
            array (
                'id' => 336,
                'district_title' => 'Barpeta',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            301 => 
            array (
                'id' => 337,
                'district_title' => 'Bongaigaon',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            302 => 
            array (
                'id' => 338,
                'district_title' => 'Cachar',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            303 => 
            array (
                'id' => 339,
                'district_title' => 'Chirang',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            304 => 
            array (
                'id' => 340,
                'district_title' => 'Darrang',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            305 => 
            array (
                'id' => 341,
                'district_title' => 'Dhemaji',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            306 => 
            array (
                'id' => 342,
                'district_title' => 'Dhubri',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            307 => 
            array (
                'id' => 343,
                'district_title' => 'Dibrugarh',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            308 => 
            array (
                'id' => 344,
            'district_title' => 'Dima Hasao (North Cachar Hills)',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            309 => 
            array (
                'id' => 345,
                'district_title' => 'Goalpara',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            310 => 
            array (
                'id' => 346,
                'district_title' => 'Golaghat',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            311 => 
            array (
                'id' => 347,
                'district_title' => 'Hailakandi',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            312 => 
            array (
                'id' => 348,
                'district_title' => 'Jorhat',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            313 => 
            array (
                'id' => 349,
                'district_title' => 'Kamrup',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            314 => 
            array (
                'id' => 350,
                'district_title' => 'Kamrup Metropolitan',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            315 => 
            array (
                'id' => 351,
                'district_title' => 'Karbi Anglong',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            316 => 
            array (
                'id' => 352,
                'district_title' => 'Karimganj',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            317 => 
            array (
                'id' => 353,
                'district_title' => 'Kokrajhar',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            318 => 
            array (
                'id' => 354,
                'district_title' => 'Lakhimpur',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            319 => 
            array (
                'id' => 355,
                'district_title' => 'Morigaon',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            320 => 
            array (
                'id' => 356,
                'district_title' => 'Nagaon',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            321 => 
            array (
                'id' => 357,
                'district_title' => 'Nalbari',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            322 => 
            array (
                'id' => 358,
                'district_title' => 'Sivasagar',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            323 => 
            array (
                'id' => 359,
                'district_title' => 'Sonitpur',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            324 => 
            array (
                'id' => 360,
                'district_title' => 'Tinsukia',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            325 => 
            array (
                'id' => 361,
                'district_title' => 'Udalguri',
                'state_id' => 4,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            326 => 
            array (
                'id' => 362,
                'district_title' => 'Bankura',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            327 => 
            array (
                'id' => 363,
                'district_title' => 'Bardhaman',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            328 => 
            array (
                'id' => 364,
                'district_title' => 'Birbhum',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            329 => 
            array (
                'id' => 365,
                'district_title' => 'Cooch Behar',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            330 => 
            array (
                'id' => 366,
            'district_title' => 'Dakshin Dinajpur (South Dinajpur)',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            331 => 
            array (
                'id' => 367,
                'district_title' => 'Darjiling',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            332 => 
            array (
                'id' => 368,
                'district_title' => 'Hooghly',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            333 => 
            array (
                'id' => 369,
                'district_title' => 'Howrah',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            334 => 
            array (
                'id' => 370,
                'district_title' => 'Jalpaiguri',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            335 => 
            array (
                'id' => 371,
                'district_title' => 'Kolkata',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            336 => 
            array (
                'id' => 372,
                'district_title' => 'Maldah',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            337 => 
            array (
                'id' => 373,
                'district_title' => 'Murshidabad',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            338 => 
            array (
                'id' => 374,
                'district_title' => 'Nadia',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            339 => 
            array (
                'id' => 375,
                'district_title' => 'North 24 Parganas',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            340 => 
            array (
                'id' => 376,
            'district_title' => 'Paschim Medinipur (West Midnapore)',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            341 => 
            array (
                'id' => 377,
            'district_title' => 'Purba Medinipur (East Midnapore)',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            342 => 
            array (
                'id' => 378,
                'district_title' => 'Puruliya',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            343 => 
            array (
                'id' => 379,
                'district_title' => 'South 24 Parganas',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            344 => 
            array (
                'id' => 380,
            'district_title' => 'Uttar Dinajpur (North Dinajpur)',
                'state_id' => 35,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            345 => 
            array (
                'id' => 381,
                'district_title' => 'Bokaro',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            346 => 
            array (
                'id' => 382,
                'district_title' => 'Chatra',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            347 => 
            array (
                'id' => 383,
                'district_title' => 'Deoghar',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            348 => 
            array (
                'id' => 384,
                'district_title' => 'Dhanbad',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            349 => 
            array (
                'id' => 385,
                'district_title' => 'Dumka',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            350 => 
            array (
                'id' => 386,
                'district_title' => 'East Singhbhum',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            351 => 
            array (
                'id' => 387,
                'district_title' => 'Garhwa',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            352 => 
            array (
                'id' => 388,
                'district_title' => 'Giridih',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            353 => 
            array (
                'id' => 389,
                'district_title' => 'Godda',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            354 => 
            array (
                'id' => 390,
                'district_title' => 'Gumla',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            355 => 
            array (
                'id' => 391,
                'district_title' => 'Hazaribagh',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            356 => 
            array (
                'id' => 392,
                'district_title' => 'Jamtara',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            357 => 
            array (
                'id' => 393,
                'district_title' => 'Khunti',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            358 => 
            array (
                'id' => 394,
                'district_title' => 'Koderma',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            359 => 
            array (
                'id' => 395,
                'district_title' => 'Latehar',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            360 => 
            array (
                'id' => 396,
                'district_title' => 'Lohardaga',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            361 => 
            array (
                'id' => 397,
                'district_title' => 'Pakur',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            362 => 
            array (
                'id' => 398,
                'district_title' => 'Palamu',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            363 => 
            array (
                'id' => 399,
                'district_title' => 'Ramgarh',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            364 => 
            array (
                'id' => 400,
                'district_title' => 'Ranchi',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            365 => 
            array (
                'id' => 401,
                'district_title' => 'Sahibganj',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            366 => 
            array (
                'id' => 402,
                'district_title' => 'Seraikela-Kharsawan',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            367 => 
            array (
                'id' => 403,
                'district_title' => 'Simdega',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            368 => 
            array (
                'id' => 404,
                'district_title' => 'West Singhbhum',
                'state_id' => 16,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            369 => 
            array (
                'id' => 405,
                'district_title' => 'Angul',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            370 => 
            array (
                'id' => 406,
                'district_title' => 'Balangir',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            371 => 
            array (
                'id' => 407,
                'district_title' => 'Baleswar',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            372 => 
            array (
                'id' => 408,
                'district_title' => 'Bargarh',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            373 => 
            array (
                'id' => 409,
                'district_title' => 'Bhadrak',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            374 => 
            array (
                'id' => 410,
                'district_title' => 'Boudh',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            375 => 
            array (
                'id' => 411,
                'district_title' => 'Cuttack',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            376 => 
            array (
                'id' => 412,
                'district_title' => 'Debagarh',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            377 => 
            array (
                'id' => 413,
                'district_title' => 'Dhenkanal',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            378 => 
            array (
                'id' => 414,
                'district_title' => 'Gajapati',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            379 => 
            array (
                'id' => 415,
                'district_title' => 'Ganjam',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            380 => 
            array (
                'id' => 416,
                'district_title' => 'Jagatsinghapur',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            381 => 
            array (
                'id' => 417,
                'district_title' => 'Jajapur',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            382 => 
            array (
                'id' => 418,
                'district_title' => 'Jharsuguda',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            383 => 
            array (
                'id' => 419,
                'district_title' => 'Kalahandi',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            384 => 
            array (
                'id' => 420,
                'district_title' => 'Kandhamal',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            385 => 
            array (
                'id' => 421,
                'district_title' => 'Kendrapara',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            386 => 
            array (
                'id' => 422,
                'district_title' => 'Kendujhar',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            387 => 
            array (
                'id' => 423,
                'district_title' => 'Khordha',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            388 => 
            array (
                'id' => 424,
                'district_title' => 'Koraput',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            389 => 
            array (
                'id' => 425,
                'district_title' => 'Malkangiri',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            390 => 
            array (
                'id' => 426,
                'district_title' => 'Mayurbhanj',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            391 => 
            array (
                'id' => 427,
                'district_title' => 'Nabarangapur',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            392 => 
            array (
                'id' => 428,
                'district_title' => 'Nayagarh',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            393 => 
            array (
                'id' => 429,
                'district_title' => 'Nuapada',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            394 => 
            array (
                'id' => 430,
                'district_title' => 'Puri',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            395 => 
            array (
                'id' => 431,
                'district_title' => 'Rayagada',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            396 => 
            array (
                'id' => 432,
                'district_title' => 'Sambalpur',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            397 => 
            array (
                'id' => 433,
            'district_title' => 'Subarnapur (Sonapur)',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            398 => 
            array (
                'id' => 434,
                'district_title' => 'Sundergarh',
                'state_id' => 26,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            399 => 
            array (
                'id' => 435,
                'district_title' => 'Bastar',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            400 => 
            array (
                'id' => 436,
            'district_title' => 'Bijapur (Chhattisgarh)',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            401 => 
            array (
                'id' => 437,
            'district_title' => 'Bilaspur (Chhattisgarh)',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            402 => 
            array (
                'id' => 438,
                'district_title' => 'Dakshin Bastar Dantewada',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            403 => 
            array (
                'id' => 439,
                'district_title' => 'Dhamtari',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            404 => 
            array (
                'id' => 440,
                'district_title' => 'Durg',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            405 => 
            array (
                'id' => 441,
                'district_title' => 'Janjgir-Champa',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            406 => 
            array (
                'id' => 442,
                'district_title' => 'Jashpur',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            407 => 
            array (
                'id' => 443,
            'district_title' => 'Kabirdham (Kawardha)',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            408 => 
            array (
                'id' => 444,
                'district_title' => 'Korba',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            409 => 
            array (
                'id' => 445,
                'district_title' => 'Koriya',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            410 => 
            array (
                'id' => 446,
                'district_title' => 'Mahasamund',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            411 => 
            array (
                'id' => 447,
                'district_title' => 'Narayanpur',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            412 => 
            array (
                'id' => 448,
            'district_title' => 'Raigarh (Chhattisgarh)',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            413 => 
            array (
                'id' => 449,
                'district_title' => 'Raipur',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            414 => 
            array (
                'id' => 450,
                'district_title' => 'Rajnandgaon',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            415 => 
            array (
                'id' => 451,
                'district_title' => 'Surguja',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            416 => 
            array (
                'id' => 452,
                'district_title' => 'Uttar Bastar Kanker',
                'state_id' => 7,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            417 => 
            array (
                'id' => 453,
                'district_title' => 'Alirajpur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            418 => 
            array (
                'id' => 454,
                'district_title' => 'Anuppur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            419 => 
            array (
                'id' => 455,
                'district_title' => 'Ashok Nagar',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            420 => 
            array (
                'id' => 456,
                'district_title' => 'Balaghat',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            421 => 
            array (
                'id' => 457,
                'district_title' => 'Barwani',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            422 => 
            array (
                'id' => 458,
                'district_title' => 'Betul',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            423 => 
            array (
                'id' => 459,
                'district_title' => 'Bhind',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            424 => 
            array (
                'id' => 460,
                'district_title' => 'Bhopal',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            425 => 
            array (
                'id' => 461,
                'district_title' => 'Burhanpur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            426 => 
            array (
                'id' => 462,
                'district_title' => 'Chhatarpur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            427 => 
            array (
                'id' => 463,
                'district_title' => 'Chhindwara',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            428 => 
            array (
                'id' => 464,
                'district_title' => 'Damoh',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            429 => 
            array (
                'id' => 465,
                'district_title' => 'Datia',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            430 => 
            array (
                'id' => 466,
                'district_title' => 'Dewas',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            431 => 
            array (
                'id' => 467,
                'district_title' => 'Dhar',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            432 => 
            array (
                'id' => 468,
                'district_title' => 'Dindori',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            433 => 
            array (
                'id' => 469,
                'district_title' => 'Guna',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            434 => 
            array (
                'id' => 470,
                'district_title' => 'Gwalior',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            435 => 
            array (
                'id' => 471,
                'district_title' => 'Harda',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            436 => 
            array (
                'id' => 472,
                'district_title' => 'Hoshangabad',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            437 => 
            array (
                'id' => 473,
                'district_title' => 'Indore',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            438 => 
            array (
                'id' => 474,
                'district_title' => 'Jabalpur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            439 => 
            array (
                'id' => 475,
                'district_title' => 'Jhabua',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            440 => 
            array (
                'id' => 476,
                'district_title' => 'Katni',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            441 => 
            array (
                'id' => 477,
            'district_title' => 'Khandwa (East Nimar)',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            442 => 
            array (
                'id' => 478,
            'district_title' => 'Khargone (West Nimar)',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            443 => 
            array (
                'id' => 479,
                'district_title' => 'Mandla',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            444 => 
            array (
                'id' => 480,
                'district_title' => 'Mandsaur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            445 => 
            array (
                'id' => 481,
                'district_title' => 'Morena',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            446 => 
            array (
                'id' => 482,
                'district_title' => 'Narsinghpur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            447 => 
            array (
                'id' => 483,
                'district_title' => 'Neemuch',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            448 => 
            array (
                'id' => 484,
                'district_title' => 'Panna',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            449 => 
            array (
                'id' => 485,
                'district_title' => 'Raisen',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            450 => 
            array (
                'id' => 486,
                'district_title' => 'Rajgarh',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            451 => 
            array (
                'id' => 487,
                'district_title' => 'Ratlam',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            452 => 
            array (
                'id' => 488,
                'district_title' => 'Rewa',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            453 => 
            array (
                'id' => 489,
                'district_title' => 'Sagar',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            454 => 
            array (
                'id' => 490,
                'district_title' => 'Satna',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            455 => 
            array (
                'id' => 491,
                'district_title' => 'Sehore',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            456 => 
            array (
                'id' => 492,
                'district_title' => 'Seoni',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            457 => 
            array (
                'id' => 493,
                'district_title' => 'Shahdol',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            458 => 
            array (
                'id' => 494,
                'district_title' => 'Shajapur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            459 => 
            array (
                'id' => 495,
                'district_title' => 'Sheopur',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            460 => 
            array (
                'id' => 496,
                'district_title' => 'Shivpuri',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            461 => 
            array (
                'id' => 497,
                'district_title' => 'Sidhi',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            462 => 
            array (
                'id' => 498,
                'district_title' => 'Singrauli',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            463 => 
            array (
                'id' => 499,
                'district_title' => 'Tikamgarh',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            464 => 
            array (
                'id' => 500,
                'district_title' => 'Ujjain',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            465 => 
            array (
                'id' => 501,
                'district_title' => 'Umaria',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            466 => 
            array (
                'id' => 502,
                'district_title' => 'Vidisha',
                'state_id' => 20,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            467 => 
            array (
                'id' => 503,
                'district_title' => 'Ahmedabad',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            468 => 
            array (
                'id' => 504,
                'district_title' => 'Amreli',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            469 => 
            array (
                'id' => 505,
                'district_title' => 'Anand',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            470 => 
            array (
                'id' => 506,
                'district_title' => 'Banaskantha',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            471 => 
            array (
                'id' => 507,
                'district_title' => 'Bharuch',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            472 => 
            array (
                'id' => 508,
                'district_title' => 'Bhavnagar',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            473 => 
            array (
                'id' => 509,
                'district_title' => 'Dahod',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            474 => 
            array (
                'id' => 510,
                'district_title' => 'Gandhi Nagar',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            475 => 
            array (
                'id' => 511,
                'district_title' => 'Jamnagar',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            476 => 
            array (
                'id' => 512,
                'district_title' => 'Junagadh',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            477 => 
            array (
                'id' => 513,
                'district_title' => 'Kachchh',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            478 => 
            array (
                'id' => 514,
                'district_title' => 'Kheda',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            479 => 
            array (
                'id' => 515,
                'district_title' => 'Mahesana',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            480 => 
            array (
                'id' => 516,
                'district_title' => 'Narmada',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            481 => 
            array (
                'id' => 517,
                'district_title' => 'Navsari',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            482 => 
            array (
                'id' => 518,
                'district_title' => 'Panch Mahals',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            483 => 
            array (
                'id' => 519,
                'district_title' => 'Patan',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            484 => 
            array (
                'id' => 520,
                'district_title' => 'Porbandar',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            485 => 
            array (
                'id' => 521,
                'district_title' => 'Rajkot',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            486 => 
            array (
                'id' => 522,
                'district_title' => 'Sabarkantha',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            487 => 
            array (
                'id' => 523,
                'district_title' => 'Surat',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            488 => 
            array (
                'id' => 524,
                'district_title' => 'Surendra Nagar',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            489 => 
            array (
                'id' => 525,
                'district_title' => 'Tapi',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            490 => 
            array (
                'id' => 526,
                'district_title' => 'The Dangs',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            491 => 
            array (
                'id' => 527,
                'district_title' => 'Vadodara',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            492 => 
            array (
                'id' => 528,
                'district_title' => 'Valsad',
                'state_id' => 12,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            493 => 
            array (
                'id' => 529,
                'district_title' => 'Daman',
                'state_id' => 9,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            494 => 
            array (
                'id' => 530,
                'district_title' => 'Diu',
                'state_id' => 9,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            495 => 
            array (
                'id' => 531,
                'district_title' => 'Dadra & Nagar Haveli',
                'state_id' => 8,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            496 => 
            array (
                'id' => 532,
                'district_title' => 'Ahmed Nagar',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            497 => 
            array (
                'id' => 533,
                'district_title' => 'Akola',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            498 => 
            array (
                'id' => 534,
                'district_title' => 'Amravati',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            499 => 
            array (
                'id' => 535,
                'district_title' => 'Aurangabad',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 536,
                'district_title' => 'Beed',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            1 => 
            array (
                'id' => 537,
                'district_title' => 'Bhandara',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            2 => 
            array (
                'id' => 538,
                'district_title' => 'Buldhana',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            3 => 
            array (
                'id' => 539,
                'district_title' => 'Chandrapur',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            4 => 
            array (
                'id' => 540,
                'district_title' => 'Dhule',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            5 => 
            array (
                'id' => 541,
                'district_title' => 'Gadchiroli',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            6 => 
            array (
                'id' => 542,
                'district_title' => 'Gondia',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            7 => 
            array (
                'id' => 543,
                'district_title' => 'Hingoli',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            8 => 
            array (
                'id' => 544,
                'district_title' => 'Jalgaon',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            9 => 
            array (
                'id' => 545,
                'district_title' => 'Jalna',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            10 => 
            array (
                'id' => 546,
                'district_title' => 'Kolhapur',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            11 => 
            array (
                'id' => 547,
                'district_title' => 'Latur',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            12 => 
            array (
                'id' => 548,
                'district_title' => 'Mumbai',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            13 => 
            array (
                'id' => 549,
                'district_title' => 'Mumbai Suburban',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            14 => 
            array (
                'id' => 550,
                'district_title' => 'Nagpur',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            15 => 
            array (
                'id' => 551,
                'district_title' => 'Nanded',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            16 => 
            array (
                'id' => 552,
                'district_title' => 'Nandurbar',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            17 => 
            array (
                'id' => 553,
                'district_title' => 'Nashik',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            18 => 
            array (
                'id' => 554,
                'district_title' => 'Osmanabad',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            19 => 
            array (
                'id' => 555,
                'district_title' => 'Parbhani',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            20 => 
            array (
                'id' => 556,
                'district_title' => 'Pune',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            21 => 
            array (
                'id' => 557,
            'district_title' => 'Raigarh (Maharashtra)',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            22 => 
            array (
                'id' => 558,
                'district_title' => 'Ratnagiri',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            23 => 
            array (
                'id' => 559,
                'district_title' => 'Sangli',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            24 => 
            array (
                'id' => 560,
                'district_title' => 'Satara',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            25 => 
            array (
                'id' => 561,
                'district_title' => 'Sindhudurg',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            26 => 
            array (
                'id' => 562,
                'district_title' => 'Solapur',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            27 => 
            array (
                'id' => 563,
                'district_title' => 'Thane',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            28 => 
            array (
                'id' => 564,
                'district_title' => 'Wardha',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            29 => 
            array (
                'id' => 565,
                'district_title' => 'Washim',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            30 => 
            array (
                'id' => 566,
                'district_title' => 'Yavatmal',
                'state_id' => 21,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            31 => 
            array (
                'id' => 567,
                'district_title' => 'Adilabad',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            32 => 
            array (
                'id' => 568,
                'district_title' => 'Anantapur',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            33 => 
            array (
                'id' => 569,
                'district_title' => 'Chittoor',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            34 => 
            array (
                'id' => 570,
                'district_title' => 'East Godavari',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            35 => 
            array (
                'id' => 571,
                'district_title' => 'Guntur',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            36 => 
            array (
                'id' => 572,
                'district_title' => 'Hyderabad',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            37 => 
            array (
                'id' => 573,
            'district_title' => 'Kadapa (Cuddapah)',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            38 => 
            array (
                'id' => 574,
                'district_title' => 'Karim Nagar',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            39 => 
            array (
                'id' => 575,
                'district_title' => 'Khammam',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            40 => 
            array (
                'id' => 576,
                'district_title' => 'Krishna',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            41 => 
            array (
                'id' => 577,
                'district_title' => 'Kurnool',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            42 => 
            array (
                'id' => 578,
                'district_title' => 'Mahbubnagar',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            43 => 
            array (
                'id' => 579,
                'district_title' => 'Medak',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            44 => 
            array (
                'id' => 580,
                'district_title' => 'Nalgonda',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            45 => 
            array (
                'id' => 581,
                'district_title' => 'Nellore',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            46 => 
            array (
                'id' => 582,
                'district_title' => 'Nizamabad',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            47 => 
            array (
                'id' => 583,
                'district_title' => 'Prakasam',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            48 => 
            array (
                'id' => 584,
                'district_title' => 'Rangareddy',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            49 => 
            array (
                'id' => 585,
                'district_title' => 'Srikakulam',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            50 => 
            array (
                'id' => 586,
                'district_title' => 'Visakhapatnam',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            51 => 
            array (
                'id' => 587,
                'district_title' => 'Vizianagaram',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            52 => 
            array (
                'id' => 588,
                'district_title' => 'Warangal',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            53 => 
            array (
                'id' => 589,
                'district_title' => 'West Godavari',
                'state_id' => 2,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            54 => 
            array (
                'id' => 590,
                'district_title' => 'Bagalkot',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            55 => 
            array (
                'id' => 591,
                'district_title' => 'Bangalore',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            56 => 
            array (
                'id' => 592,
                'district_title' => 'Bangalore Rural',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            57 => 
            array (
                'id' => 593,
                'district_title' => 'Belgaum',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            58 => 
            array (
                'id' => 594,
                'district_title' => 'Bellary',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            59 => 
            array (
                'id' => 595,
                'district_title' => 'Bidar',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            60 => 
            array (
                'id' => 596,
            'district_title' => 'Bijapur (Karnataka)',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            61 => 
            array (
                'id' => 597,
                'district_title' => 'Chamrajnagar',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            62 => 
            array (
                'id' => 598,
                'district_title' => 'Chickmagalur',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            63 => 
            array (
                'id' => 599,
                'district_title' => 'Chikkaballapur',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            64 => 
            array (
                'id' => 600,
                'district_title' => 'Chitradurga',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            65 => 
            array (
                'id' => 601,
                'district_title' => 'Dakshina Kannada',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            66 => 
            array (
                'id' => 602,
                'district_title' => 'Davanagere',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            67 => 
            array (
                'id' => 603,
                'district_title' => 'Dharwad',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            68 => 
            array (
                'id' => 604,
                'district_title' => 'Gadag',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            69 => 
            array (
                'id' => 605,
                'district_title' => 'Gulbarga',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            70 => 
            array (
                'id' => 606,
                'district_title' => 'Hassan',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            71 => 
            array (
                'id' => 607,
                'district_title' => 'Haveri',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            72 => 
            array (
                'id' => 608,
                'district_title' => 'Kodagu',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            73 => 
            array (
                'id' => 609,
                'district_title' => 'Kolar',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            74 => 
            array (
                'id' => 610,
                'district_title' => 'Koppal',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            75 => 
            array (
                'id' => 611,
                'district_title' => 'Mandya',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            76 => 
            array (
                'id' => 612,
                'district_title' => 'Mysore',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            77 => 
            array (
                'id' => 613,
                'district_title' => 'Raichur',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            78 => 
            array (
                'id' => 614,
                'district_title' => 'Ramanagara',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            79 => 
            array (
                'id' => 615,
                'district_title' => 'Shimoga',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            80 => 
            array (
                'id' => 616,
                'district_title' => 'Tumkur',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            81 => 
            array (
                'id' => 617,
                'district_title' => 'Udupi',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            82 => 
            array (
                'id' => 618,
                'district_title' => 'Uttara Kannada',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            83 => 
            array (
                'id' => 619,
                'district_title' => 'Yadgir',
                'state_id' => 17,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            84 => 
            array (
                'id' => 620,
                'district_title' => 'North Goa',
                'state_id' => 11,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            85 => 
            array (
                'id' => 621,
                'district_title' => 'South Goa',
                'state_id' => 11,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            86 => 
            array (
                'id' => 622,
                'district_title' => 'Lakshadweep',
                'state_id' => 19,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            87 => 
            array (
                'id' => 623,
                'district_title' => 'Alappuzha',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            88 => 
            array (
                'id' => 624,
                'district_title' => 'Ernakulam',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            89 => 
            array (
                'id' => 625,
                'district_title' => 'Idukki',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            90 => 
            array (
                'id' => 626,
                'district_title' => 'Kannur',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            91 => 
            array (
                'id' => 627,
                'district_title' => 'Kasaragod',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            92 => 
            array (
                'id' => 628,
                'district_title' => 'Kollam',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            93 => 
            array (
                'id' => 629,
                'district_title' => 'Kottayam',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            94 => 
            array (
                'id' => 630,
                'district_title' => 'Kozhikode',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            95 => 
            array (
                'id' => 631,
                'district_title' => 'Malappuram',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            96 => 
            array (
                'id' => 632,
                'district_title' => 'Palakkad',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            97 => 
            array (
                'id' => 633,
                'district_title' => 'Pathanamthitta',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            98 => 
            array (
                'id' => 634,
                'district_title' => 'Thiruvananthapuram',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            99 => 
            array (
                'id' => 635,
                'district_title' => 'Thrissur',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            100 => 
            array (
                'id' => 636,
                'district_title' => 'Wayanad',
                'state_id' => 18,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            101 => 
            array (
                'id' => 637,
                'district_title' => 'Ariyalur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            102 => 
            array (
                'id' => 638,
                'district_title' => 'Chennai',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            103 => 
            array (
                'id' => 639,
                'district_title' => 'Coimbatore',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            104 => 
            array (
                'id' => 640,
                'district_title' => 'Cuddalore',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            105 => 
            array (
                'id' => 641,
                'district_title' => 'Dharmapuri',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            106 => 
            array (
                'id' => 642,
                'district_title' => 'Dindigul',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            107 => 
            array (
                'id' => 643,
                'district_title' => 'Erode',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            108 => 
            array (
                'id' => 644,
                'district_title' => 'Kanchipuram',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            109 => 
            array (
                'id' => 645,
                'district_title' => 'Kanyakumari',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            110 => 
            array (
                'id' => 646,
                'district_title' => 'Karur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            111 => 
            array (
                'id' => 647,
                'district_title' => 'Krishnagiri',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            112 => 
            array (
                'id' => 648,
                'district_title' => 'Madurai',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            113 => 
            array (
                'id' => 649,
                'district_title' => 'Nagapattinam',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            114 => 
            array (
                'id' => 650,
                'district_title' => 'Namakkal',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            115 => 
            array (
                'id' => 651,
                'district_title' => 'Nilgiris',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            116 => 
            array (
                'id' => 652,
                'district_title' => 'Perambalur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            117 => 
            array (
                'id' => 653,
                'district_title' => 'Pudukkottai',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            118 => 
            array (
                'id' => 654,
                'district_title' => 'Ramanathapuram',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            119 => 
            array (
                'id' => 655,
                'district_title' => 'Salem',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            120 => 
            array (
                'id' => 656,
                'district_title' => 'Sivaganga',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            121 => 
            array (
                'id' => 657,
                'district_title' => 'Thanjavur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            122 => 
            array (
                'id' => 658,
                'district_title' => 'Theni',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            123 => 
            array (
                'id' => 659,
            'district_title' => 'Thoothukudi (Tuticorin)',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            124 => 
            array (
                'id' => 660,
                'district_title' => 'Tiruchirappalli',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            125 => 
            array (
                'id' => 661,
                'district_title' => 'Tirunelveli',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            126 => 
            array (
                'id' => 662,
                'district_title' => 'Tiruppur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            127 => 
            array (
                'id' => 663,
                'district_title' => 'Tiruvallur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            128 => 
            array (
                'id' => 664,
                'district_title' => 'Tiruvannamalai',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            129 => 
            array (
                'id' => 665,
                'district_title' => 'Tiruvarur',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            130 => 
            array (
                'id' => 666,
                'district_title' => 'Vellore',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            131 => 
            array (
                'id' => 667,
                'district_title' => 'Viluppuram',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            132 => 
            array (
                'id' => 668,
                'district_title' => 'Virudhunagar',
                'state_id' => 31,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            133 => 
            array (
                'id' => 669,
                'district_title' => 'Karaikal',
                'state_id' => 27,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            134 => 
            array (
                'id' => 670,
                'district_title' => 'Mahe',
                'state_id' => 27,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            135 => 
            array (
                'id' => 671,
            'district_title' => 'Puducherry (Pondicherry)',
                'state_id' => 27,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            136 => 
            array (
                'id' => 672,
                'district_title' => 'Yanam',
                'state_id' => 27,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            137 => 
            array (
                'id' => 673,
                'district_title' => 'Nicobar',
                'state_id' => 1,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            138 => 
            array (
                'id' => 674,
                'district_title' => 'North And Middle Andaman',
                'state_id' => 1,
                'district_description' => '',
                'district_status' => 'Active',
            ),
            139 => 
            array (
                'id' => 675,
                'district_title' => 'South Andaman',
                'state_id' => 1,
                'district_description' => '',
                'district_status' => 'Active',
            ),
        ));
        
        
    }
}