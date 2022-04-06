<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\client;
use App\Models\ClientContact;
use App\Models\client_location;
use App\Models\District;
use App\Models\role;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //addclient page

    public function clientshow(Request $request)
    {

        $role_id = role::where('is_crm', '1')->pluck('id')->all();
        //dd($role_id);

        $crm_user = User::whereIn('role_id', $role_id)->get();
        //die;

        $state_name = State::all();
        //$roles = $request->session()->get('CLIENT_FULLNAME');

        return view('client', compact('crm_user', 'state_name'));

    }

    // public function client_insert(Request $request)
    // {
    //     //dd('hi');
    //     //dd($request);

    //     // dd($request->repeater_list[0]['contactname']);

    //     $count = count($request->repeater_list);
    //     //  dd($count);

    //     $role = new client;
    //     $role->client_name = request('fullname');
    //     $role->mobile = request('phone');
    //     $role->door_no = request('doorno');
    //     $role->street_name = request('streetname');

    //     $role->area_name = request('area');
    //     $role->city_id = request('cityname');
    //     $role->district_id = request('districtname');
    //     $role->state_id = request('State');

    //     $role->pincode = request('pincode');
    //     $role->crm_id = request('crm');
    //     $role->status = request('status');
    //     $role->save();

    //     $LastInsertId = $role->id;

    //     for ($i = 0; $i < $count; $i++) {

    //         $role1 = new ClientContact;
    //         // dd(request('contactname'));
    //         $role1->contact_name = $request->repeater_list[$i]['contactname'];
    //         $role1->client_id = $LastInsertId;
    //         $role1->mobile = $request->repeater_list[$i]['contactphone'];
    //         $role1->email = $request->repeater_list[$i]['contactmail'];
    //         $role1->designation = $request->repeater_list[$i]['designation'];

    //         $role1->door_no = $request->repeater_list[$i]['doorno'];
    //         $role1->street_name = $request->repeater_list[$i]['streetname'];

    //         $role1->area_name = $request->repeater_list[$i]['area'];
    //         $role1->state_id = $request->repeater_list[$i]['State'];
    //         // $role1->state_id = "1";

    //         $role1->district_id = $request->repeater_list[$i]['districtname'];
    //         // $role1->district_id = "1";

    //         $role1->city_id = $request->repeater_list[$i]['cityname'];

    //         // $role1->city_id = "1";

    //         $role1->pincode = $request->repeater_list[$i]['pincode'];

    //         $role1->status = $request->repeater_list[$i]['status'];

    //         // dd($role);
    //         $role1->save();

    //     }

    //     $request->session()->flash('roleinster', ' Inserted Successflly');
    //     return redirect('/viewclient');

    // }
    public function client_insert(Request $request)
    {
        // dd($request->all());

        $test = [
            'CLIENT_FULLNAME' => $request->fullname,
            'CLIENT_PHONE' => $request->phone,
            'CLIENT_DRNO' => $request->doorno,
            'CLIENT_STNAME' => $request->streetname,

            'CLIENT_AREA' => $request->area,

            'CLIENT_CITY' => $request->cityname,

            'CLIENT_DIST' => $request->districtname,

            'CLIENT_STATE' => $request->State,

            'CLIENT_PINCODE' => $request->pincode,
            'CLIENT_CRM' => $request->crm,
            'CLIENT_STATUS' => $request->status,

        ];
        $request->session()->put('client', $test);

        //dd(session('client')['CLIENT_FULLNAME']);
        //$request->session()->forget('client');

        return redirect('client_contactpage');
    }

    public function client_contactshow(Request $request)
    {
        $state_name = State::all();
        $district = District::all();
        $city = city::all();

        $client_branch = client_location::all();
        return view('client_contact', compact('state_name', 'client_branch', 'district', 'city'));

    }

    public function client_insertpage2(Request $request)
    {
        //dd($request->data[0]['contactname']);

        //dd(session('USER_ID'));
        // dd(count($request->data));

        $role = new client;
        $role->client_name = session('client')['CLIENT_FULLNAME'];
        $role->mobile = session('client')['CLIENT_PHONE'];
        $role->door_no = session('client')['CLIENT_DRNO'];
        $role->street_name = session('client')['CLIENT_STNAME'];

        $role->area_name = session('client')['CLIENT_AREA'];
        $role->city_id = session('client')['CLIENT_CITY'];
        $role->district_id = session('client')['CLIENT_DIST'];
        $role->state_id = session('client')['CLIENT_STATE'];

        $role->pincode = session('client')['CLIENT_PINCODE'];
        $role->crm_id = session('client')['CLIENT_CRM'];
        $role->status = session('client')['CLIENT_STATUS'];
        $role->created_by = session('USER_ID');
        $role->save();

        $LastInsertId = $role->id;
        // dd($request->repeater_list);
        $count = count($request->data);
        //dd($request->data);

        for ($i = 0; $i < $count; $i++) {
            //dd($count);

            $role1 = new ClientContact;

            $role1->client_id = $LastInsertId;
            $role1->contact_name = $request->data[$i]['contactname'];
            $role1->mobile = $request->data[$i]['contactphone'];
            $role1->email = $request->data[$i]['contactmail'];
            $role1->designation = $request->data[$i]['designation'];

            $role1->door_no = $request->data[$i]['doorno'];
            $role1->street_name = $request->data[$i]['streetname'];

            $role1->area_name = $request->data[$i]['area'];
            $role1->state_id = $request->data[$i]['State'];
            // $role1->state_id = "1";

            $role1->district_id = $request->data[$i]['districtname'];
            // $role1->district_id = "1";

            $role1->city_id = $request->data[$i]['cityname'];

            // $role1->city_id = "1";

            $role1->pincode = $request->data[$i]['pincode'];

            $role1->status = $request->data[$i]['status'];
            $role1->created_by = session('USER_ID');

            // dd($role);
            $role1->save();

        }
        $request->session()->forget('client');

        $request->session()->flash('roleinster', ' Inserted Successflly');
        return redirect('/viewclient');

    }

    public function client_usermail()
    {

        //$role1 = role::where('id', '2')->pluck('id');
        $xyz = User::where('role_id', '2')->get();
        dd($xyz);

    }

    //viewclient page

    public function viewclientshow()
    {
        // return view('viewclient');
        // $role_id = role::where('is_crm', '1')->pluck('id')->all();
        // //dd($role_id);

        // $crm_user = User::whereIn('role_id', $role_id)->get();
        //die;

        $view = client::all();

        return view('viewclient', compact('view'));
    }
    public function view_approv_client()
    {

        $view = client::all();

        return view('client_approve', compact('view'));
    }

    public function viewclientshow_details($id)
    {
        //dd('hello');
        $view = client::findorfail($id);

        return view('viewclient_details', compact('view'));
        //return view('viewclient_details');
    }

    // public function viewclientshow_detailsss()
    // {

    //     return view('viewclient_details');
    // }

    // public function test_c_cont()
    // {$client_branch = client_location::all();

    //     return view('client_contact', compact('client_branch'));
    // }

    // public function insert_test_clientcontact(Request $request)
    // {
    //     dd($request->all());

    // }

}