<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2022_02_12_070410_create_location_table',
                'batch' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2022_02_12_170912_create_client_location_table',
                'batch' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'migration' => '2022_02_15_070036_create_roll_table',
                'batch' => 4,
            ),
            4 => 
            array (
                'id' => 6,
                'migration' => '2022_02_16_115335_add_image_id_to_users_table',
                'batch' => 5,
            ),
            5 => 
            array (
                'id' => 7,
                'migration' => '2022_02_16_131400_add_designation_to_users_table',
                'batch' => 6,
            ),
            6 => 
            array (
                'id' => 8,
                'migration' => '2022_02_17_094238_create_qualifications_table',
                'batch' => 7,
            ),
            7 => 
            array (
                'id' => 9,
                'migration' => '2022_02_17_123317_add_status_to_qualification_table',
                'batch' => 8,
            ),
            8 => 
            array (
                'id' => 10,
                'migration' => '2022_02_19_101514_create_client_designations_table',
                'batch' => 9,
            ),
            9 => 
            array (
                'id' => 11,
                'migration' => '2022_02_26_100904_create_addclients_table',
                'batch' => 10,
            ),
            10 => 
            array (
                'id' => 12,
                'migration' => '2022_03_03_073630_create_client_contacts_table',
                'batch' => 11,
            ),
            11 => 
            array (
                'id' => 13,
                'migration' => '2022_03_07_052320_create_functional_areas_table',
                'batch' => 12,
            ),
            12 => 
            array (
                'id' => 14,
                'migration' => '2022_03_07_072000_create_industries_table',
                'batch' => 13,
            ),
            13 => 
            array (
                'id' => 15,
                'migration' => '2022_04_02_124245_create_cities_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 16,
                'migration' => '2022_04_02_124245_create_client_contacts_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 17,
                'migration' => '2022_04_02_124245_create_client_designations_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 18,
                'migration' => '2022_04_02_124245_create_client_location_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 19,
                'migration' => '2022_04_02_124245_create_clients_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 20,
                'migration' => '2022_04_02_124245_create_districts_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 21,
                'migration' => '2022_04_02_124245_create_functional_areas_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 22,
                'migration' => '2022_04_02_124245_create_industries_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 23,
                'migration' => '2022_04_02_124245_create_location_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 24,
                'migration' => '2022_04_02_124245_create_msgs_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 25,
                'migration' => '2022_04_02_124245_create_otpstores_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 26,
                'migration' => '2022_04_02_124245_create_password_resets_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 27,
                'migration' => '2022_04_02_124245_create_positions_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 28,
                'migration' => '2022_04_02_124245_create_qualifications_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 29,
                'migration' => '2022_04_02_124245_create_roles_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 30,
                'migration' => '2022_04_02_124245_create_states_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 31,
                'migration' => '2022_04_02_124245_create_user_designations_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 32,
                'migration' => '2022_04_02_124245_create_users_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}