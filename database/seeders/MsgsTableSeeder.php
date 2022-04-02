<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MsgsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('msgs')->delete();
        
        \DB::table('msgs')->insert(array (
            0 => 
            array (
                'id' => 2,
                'authkey' => 'hvhjbhj5466327891',
                'flowid' => 'dsvsdvd6853567',
                'senderid' => 'sdvsdvds896567',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}