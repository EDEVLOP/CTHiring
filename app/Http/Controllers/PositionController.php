<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\FunctionalArea;
use App\Models\Industry;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function positionshow()
    {
        $client1 = client::all();
        // $c_contactname = ClientContact::all();
        $qualification1 = Qualification::all();
        $function_area1 = FunctionalArea::all();
        $industry1 = Industry::all();

        $requiter = user::
            where('role_id', '=', 8)->get();
        $crm_position = User::
            where('role_id', '=', 1)
            ->orwhere('role_id', '=', 5)
            ->orwhere('role_id', '=', 6)
            ->orwhere('role_id', '=', 7)->get();

        $jobcode = $this->jobcodeshow();
        $year = date("Y");

        return view('position', compact('client1', 'qualification1', 'function_area1', 'industry1', 'requiter', 'crm_position', 'jobcode', 'year'));

    }

    public function jobcodeshow()
    {

        $year = date("Y");
        $result1 = Position::whereYear('created_at', '=', $year)
            ->where('is_deleted', '=', 'N')
            ->get();
        $result = count($result1);
        $jobcode = sprintf("%02d", $result + 1);
        return $jobcode;

    }

    // public function position_insert(Request $request)
    // {
    //     $role = new Position;
    //     $role->client_name = request('fullname');
    //     $role->spoc_name = request('client_contanct_name');
    //     $role->job_title = request('jobname');

    //     $role->status = request('status');
    //     $role->save();
    //     $request->session()->flash('roleinster', 'Role Inserted Successflly');
    //     return redirect('/role');
    // }

    public function position_inserts(Request $request)
    {
        dd($request);
        $multi_name_p = $request->name_position;
        $Position_ar = explode(';', substr($multi_name_p, 0, -1));
        //$role->client_name = request('name_position');
        $str = '';
        $val = '';
        $value_ar = [];
        $namevalue_ar = [];
        foreach ($Position_ar as $value) {
            $value_ar = explode(',', $value);

            foreach ($value_ar as $valuear) {
                $role = new Position;

                $namevalue_ar = explode('#', $valuear);
                //return $namevalue_ar[0];
                $role->openingfield_hiddendata = $namevalue_ar[0];
                $role->multipul_nameposition_hidden = $namevalue_ar[1];
                //return $role;

                $role->client_name = request('fullname');
                $role->spoc_name = request('client_contanct_name');

                $role->job_title = request('jobname');
                $role->job_location = request('joblocation');
                $role->job_code = request('jobcode');
                $role->min_experience = request('min_experience');
                $role->max_experience = request('max_experience');

                $role->annual_ctc_min = $request->input('min_salary') . $request->input('salary_value');
                $role->annual_ctc_max = request('max_salary') . request('salary_value2');

                $role->qualification = request('qualification');
                $role->functional_area = request('functionarea');
                $role->industry = request('industryname');

                $role->age_min = request('min_age');
                $role->age_max = request('max_age');
                $role->technicalskils = json_encode($request->technical);

                $role->behaviour_skils = request('behavioural');
                $role->total_opening = request('opening');
                $role->recruiters = request('recruitername');

                $role->crm = request('crm_name');
                $role->billable_value = request('bill_value');

                $role->total_billable = request('total_billvalue');

                $role->joining_date = request('joiningdate');

                $role->gender = request('basic_radio');

                $role->resume_contact = request('resume1');

                $role->resume_type = request('resumetype1');

                $role->project_type = request('ptype1');
                $role->publish_website = request('website1');
                $role->job_description_ckediter = request('editor1');
                $role->file_attachment = request('filetype');

                dd($role);

                $role->save();
            }

        }

        $request->session()->flash('roleinster', ' Inserted Successflly');
        return redirect('/position');
    }

}