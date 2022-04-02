<?php

namespace App\Http\Controllers;

use App\Models\ClientContact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_contactperson(Request $request)
    {

        //dd($request->spoc_id);
        $spoc1['spoc_name'] = ClientContact::where('client_id', $request->spoc_id)->get();
        //dd($spoc1['spoc_name']);
        return response()->json($spoc1);

    }

    //    cut the code
    public function myplandesign()
    {
        return view('myplan');
    }

    public function myplandesign2()
    {
        dd(session('USER_ID'));

        return view('myplan2');

        exit;
    }

}