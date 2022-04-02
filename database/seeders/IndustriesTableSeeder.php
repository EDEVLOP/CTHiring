<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('industries')->delete();
        
        \DB::table('industries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'industryfunction' => 'Animationaa',
                'modified_by' => NULL,
                'created_by' => NULL,
                'status' => 2,
                'is_deleted' => 'N',
                'created_at' => '2022-03-07 09:23:00',
                'updated_at' => '2022-03-07 09:35:20',
            ),
            1 => 
            array (
                'id' => 2,
                'industryfunction' => 'BPO/ITES',
                'modified_by' => NULL,
                'created_by' => NULL,
                'status' => 1,
                'is_deleted' => 'Y',
                'created_at' => '2022-03-07 09:38:23',
                'updated_at' => '2022-03-07 09:38:29',
            ),
        ));
        
        
    }
}