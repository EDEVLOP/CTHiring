<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_name' => 'Director',
                'role_des' => 'Director Dec',
                'is_crm' => 1,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_name' => 'Business Head',
                'role_des' => 'Business Dec',
                'is_crm' => 0,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_name' => 'BD Head',
                'role_des' => 'BD Dec',
                'is_crm' => 0,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'role_name' => 'CD Executive',
                'role_des' => 'BD Executive Dec',
                'is_crm' => 0,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'role_name' => 'Branch Head',
                'role_des' => 'Branch Dec',
                'is_crm' => 1,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'role_name' => 'Vertical Head',
                'role_des' => 'Vertical Dec',
                'is_crm' => 1,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'role_name' => 'Team Lead',
                'role_des' => 'Team Lead Dec',
                'is_crm' => 1,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'role_name' => 'Recruiter',
                'role_des' => 'Recruiter Dec',
                'is_crm' => 0,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'role_name' => 'Administrator',
                'role_des' => 'Administrator Dec',
                'is_crm' => 0,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}