<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'state_id' => 1,
                'state_title' => 'Andaman & Nicobar Islands',
                'state_description' => '',
                'status' => 'Active',
            ),
            1 => 
            array (
                'state_id' => 2,
                'state_title' => 'Andhra Pradesh',
                'state_description' => '',
                'status' => 'Active',
            ),
            2 => 
            array (
                'state_id' => 3,
                'state_title' => 'Arunachal Pradesh',
                'state_description' => '',
                'status' => 'Active',
            ),
            3 => 
            array (
                'state_id' => 4,
                'state_title' => 'Assam',
                'state_description' => '',
                'status' => 'Active',
            ),
            4 => 
            array (
                'state_id' => 5,
                'state_title' => 'Bihar',
                'state_description' => '',
                'status' => 'Active',
            ),
            5 => 
            array (
                'state_id' => 6,
                'state_title' => 'Chandigarh',
                'state_description' => '',
                'status' => 'Active',
            ),
            6 => 
            array (
                'state_id' => 7,
                'state_title' => 'Chhattisgarh',
                'state_description' => '',
                'status' => 'Active',
            ),
            7 => 
            array (
                'state_id' => 8,
                'state_title' => 'Dadra & Nagar Haveli',
                'state_description' => '',
                'status' => 'Active',
            ),
            8 => 
            array (
                'state_id' => 9,
                'state_title' => 'Daman & Diu',
                'state_description' => '',
                'status' => 'Active',
            ),
            9 => 
            array (
                'state_id' => 10,
                'state_title' => 'Delhi',
                'state_description' => '',
                'status' => 'Active',
            ),
            10 => 
            array (
                'state_id' => 11,
                'state_title' => 'Goa',
                'state_description' => '',
                'status' => 'Active',
            ),
            11 => 
            array (
                'state_id' => 12,
                'state_title' => 'Gujarat',
                'state_description' => '',
                'status' => 'Active',
            ),
            12 => 
            array (
                'state_id' => 13,
                'state_title' => 'Haryana',
                'state_description' => '',
                'status' => 'Active',
            ),
            13 => 
            array (
                'state_id' => 14,
                'state_title' => 'Himachal Pradesh',
                'state_description' => '',
                'status' => 'Active',
            ),
            14 => 
            array (
                'state_id' => 15,
                'state_title' => 'Jammu & Kashmir',
                'state_description' => '',
                'status' => 'Active',
            ),
            15 => 
            array (
                'state_id' => 16,
                'state_title' => 'Jharkhand',
                'state_description' => '',
                'status' => 'Active',
            ),
            16 => 
            array (
                'state_id' => 17,
                'state_title' => 'Karnataka',
                'state_description' => '',
                'status' => 'Active',
            ),
            17 => 
            array (
                'state_id' => 18,
                'state_title' => 'Kerala',
                'state_description' => '',
                'status' => 'Active',
            ),
            18 => 
            array (
                'state_id' => 19,
                'state_title' => 'Lakshadweep',
                'state_description' => '',
                'status' => 'Active',
            ),
            19 => 
            array (
                'state_id' => 20,
                'state_title' => 'Madhya Pradesh',
                'state_description' => '',
                'status' => 'Active',
            ),
            20 => 
            array (
                'state_id' => 21,
                'state_title' => 'Maharashtra',
                'state_description' => '',
                'status' => 'Active',
            ),
            21 => 
            array (
                'state_id' => 22,
                'state_title' => 'Manipur',
                'state_description' => '',
                'status' => 'Active',
            ),
            22 => 
            array (
                'state_id' => 23,
                'state_title' => 'Meghalaya',
                'state_description' => '',
                'status' => 'Active',
            ),
            23 => 
            array (
                'state_id' => 24,
                'state_title' => 'Mizoram',
                'state_description' => '',
                'status' => 'Active',
            ),
            24 => 
            array (
                'state_id' => 25,
                'state_title' => 'Nagaland',
                'state_description' => '',
                'status' => 'Active',
            ),
            25 => 
            array (
                'state_id' => 26,
                'state_title' => 'Odisha',
                'state_description' => '',
                'status' => 'Active',
            ),
            26 => 
            array (
                'state_id' => 27,
                'state_title' => 'Puducherry',
                'state_description' => '',
                'status' => 'Active',
            ),
            27 => 
            array (
                'state_id' => 28,
                'state_title' => 'Punjab',
                'state_description' => '',
                'status' => 'Active',
            ),
            28 => 
            array (
                'state_id' => 29,
                'state_title' => 'Rajasthan',
                'state_description' => '',
                'status' => 'Active',
            ),
            29 => 
            array (
                'state_id' => 30,
                'state_title' => 'Sikkim',
                'state_description' => '',
                'status' => 'Active',
            ),
            30 => 
            array (
                'state_id' => 31,
                'state_title' => 'Tamil Nadu',
                'state_description' => '',
                'status' => 'Active',
            ),
            31 => 
            array (
                'state_id' => 32,
                'state_title' => 'Tripura',
                'state_description' => '',
                'status' => 'Active',
            ),
            32 => 
            array (
                'state_id' => 33,
                'state_title' => 'Uttar Pradesh',
                'state_description' => '',
                'status' => 'Active',
            ),
            33 => 
            array (
                'state_id' => 34,
                'state_title' => 'Uttarakhand',
                'state_description' => '',
                'status' => 'Active',
            ),
            34 => 
            array (
                'state_id' => 35,
                'state_title' => 'West Bengal',
                'state_description' => '',
                'status' => 'Active',
            ),
        ));
        
        
    }
}