<?php

namespace App\Http\Controllers;

use App\Models\OtpStore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function login(Request $request)
    {

        return view('login');

    }

    public function login_submit(Request $request)
    {
        $email = $request->input('email');

        $result = DB::table('users')
            ->where('email', $email)
            ->where('status', 1)
            ->get();

        $request->session()->put('USER_ID', $result[0]->id);

        if (isset($result[0]->id)) {
            $passtemp = ($result[0]->temp_password);
            $phno = ($result[0]->mobile);
            $pass = ($result[0]->password);

            if ($passtemp == null) {
                //dd($request->input('password'));
                if ($pass == $request->input('password')) {
                    //dd('correct password');

                    //success login with password
                    return $this->otp("USER_ID");

                    //return redirect('/otp');

                } else {
                    //dd("Invalid Password");

                    dd('wrong');

                }

            } else {

                if ($passtemp == $request->input('password')) {
                    // dd('correct Tepm Password');

                    $res = $result[0]->id;
                    // return redirect('/changepassword')->with(['res' => $res]);

                    return view('newpassword', compact('res'));
                    // (or)
                    //return view('newpassword', ['test' => $res]);

                } else {
                    //dd('invalid temp password');

                    // echo ("invalid temp password");
                    // exit;

                    $request->session()->put('otpinvalid');
                    //dd($request);
                    return redirect('/login');

                }

            }
        } else {
            dd('no email');
        }

    }

    public function otp()
    {

        $user_id = session('USER_ID');

        $get_mobile = User::where('id', $user_id)->get();
        $mobile = $get_mobile[0]['mobile'];

        $string = rand(111111, 999999);
        // $string = "444333";

        //msg91 start

        // $curl = curl_init();
        // curl_setopt_array($curl, [
        //     CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"61d45522cd7ff2681d3473e3\",\n  \"sender\": \"EDEVLP\",\n  \"mobiles\": $mobile,\n  \"otp\":  $string}",
        //     CURLOPT_HTTPHEADER => [
        //         "authkey: 341290AwyXYR7q2d975f5a0812P1",
        //         "content-type: application/JSON"
        //     ],
        // ]);
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);
        //
        // }

        //msg91 end
        $check_mobile = OtpStore::where('mobile_no', $mobile)->get();
        // dd($check_mobile);

        if (isset($check_mobile[0]->id)) {
            //dd('null');

            $role = OtpStore::findorfail($check_mobile[0]->id);
            $role->otp = $string;
            $role->save();

        } else {
            $role = new OtpStore;
            $role->mobile_no = $mobile;
            $role->otp = $string;

            $role->save();

        }
        return view('/otp');

        //dd($role);

    }

    public function otp_verify(Request $request)
    {
        $user_id = session('USER_ID');
        $get_mobile = User::where('id', $user_id)->get();
        $mobile = $get_mobile[0]['mobile'];

        $get_otp = OtpStore::where('mobile_no', $mobile)->get();
        //dd($get_otp);
        $gt_otp = $get_otp[0]['otp'];
        if ($gt_otp == $request->input('otp')) {
            //dd('hi');
            $request->session()->put('otpinvalid', false);

            return redirect('/');

        } else {
            $request->session()->put('otpinvalid', true);
            // dd($request);
            return redirect('/login');

            // dd('no');

        }

    }

    public function change_password(Request $request)
    {

        return view('newpassword');

    }

    // public function generateotp()
    // {
    //     return $this->string;
    // }

    public function add_newpassword(Request $request)
    {
        // $otpgen = $this->generateotp('444333');
        // dd($otpgen);

        //dd($request->newuser_tempassword);

        $role = User::findorfail($request->tempassword_id);
        $role->password = request('password');
        $role->temp_password = null;
        //dd($request);
        $role->save();
        return redirect('/otp');

        // $request->session()->flash('roleinster', 'Qualification Update Successflly');
        //return redirect('/qualification');

    }

}