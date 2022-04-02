<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FunctionalAreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('functional_areas')->delete();
        
        \DB::table('functional_areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'function' => 'fashionfashion',
                'modified_by' => NULL,
                'created_by' => NULL,
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => '2022-03-07 06:32:14',
                'updated_at' => '2022-03-07 07:08:16',
            ),
            1 => 
            array (
                'id' => 2,
                'function' => 'fashion',
                'modified_by' => NULL,
                'created_by' => NULL,
                'status' => 2,
                'is_deleted' => 'N',
                'created_at' => '2022-03-07 06:33:35',
                'updated_at' => '2022-03-07 06:33:35',
            ),
            2 => 
            array (
                'id' => 3,
                'function' => 'fashion2',
                'modified_by' => NULL,
                'created_by' => NULL,
                'status' => 2,
                'is_deleted' => 'Y',
                'created_at' => '2022-03-07 06:45:02',
                'updated_at' => '2022-03-07 07:11:45',
            ),
        ));
        
        
    }
}