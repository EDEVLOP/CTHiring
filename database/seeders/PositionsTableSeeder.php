<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('positions')->delete();
        
        \DB::table('positions')->insert(array (
            0 => 
            array (
                'id' => 11,
                'position_id_totalopeningclient' => NULL,
                'client_name' => '35',
                'spoc_name' => '15',
                'job_title' => 'laravel',
                'job_location' => 'bbsr',
                'job_code' => 'CT/01/2022',
                'min_experience' => '5',
                'max_experience' => '8',
                'annual_ctc_min' => '2Lakhs',
                'annual_ctc_max' => '5Lakhs',
                'qualification' => '1',
                'functional_area' => '2',
                'industry' => '2',
                'age_min' => '20',
                'age_max' => '25',
                'gender' => 'Male',
                'technicalskils' => '"html,css,laravel"',
                'behaviour_skils' => '5',
                'total_opening' => NULL,
                'recruiters' => NULL,
                'crm' => '1',
                'billable_value' => '100',
                'total_billable' => NULL,
                'joining_date' => '04/01/2022',
                'resume_contact' => 'yes',
                'resume_type' => 'Snapshot',
                'project_type' => 'rpo',
                'publish_website' => 'yes',
                'job_description_ckediter' => '<p>hyyyy</p>',
                'file_attachment' => NULL,
                'openingfield_hiddendata' => '5',
                'multipul_nameposition_hidden' => '11',
                'status' => NULL,
                'is_deleted' => 'N',
                'created_at' => '2022-04-01 13:02:19',
                'updated_at' => '2022-04-01 13:02:19',
            ),
        ));
        
        
    }
}