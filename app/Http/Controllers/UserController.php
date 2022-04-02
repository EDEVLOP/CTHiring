<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\role;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function user_insert(Request $request)
    {
        // $created_by = session('USER_ID');
        // dd($created_by);

        //image
        $imageName = time() . '.' . $request->image->extension();
        // dd($imageName);

        $randimg = $request->image->move(('images/'), $imageName);

        $role = new user;
        $role->fname = request('fname');
        $role->lname = request('lname');
        $role->email = request('email');
        $role->mobile = request('mobile');

        $role->gender = request('gender');
        $role->designation = request('designation');

        $role->role_id = request('role');
        $role->location_id = request('user_location');
        $role->level_1 = request('label_1');
        $role->level_2 = request('label_2');
        $role->status = request('status');
        $role->images = $imageName;
        $role->signature = request('editor');
        $role->created_by = session('USER_ID');

        $role->save();
        $request->session()->flash('roleinster', 'User Inserted Successflly');
        return redirect('/user');
    }

    public function userfetch()
    {
        $role = role::all();

        $location3 = location::all()->where('is_deleted', 'N');

        // $whereData = array(array('role_id', '=', '1'), array('role_id', '=', '5'), array('role_id', '=', '6'), array('role_id', '=', '7'));
        // role wise user show in this query ,which is inserted by 1,5,6,7
        $l1 = user::
            where('role_id', '=', 1)
            ->orwhere('role_id', '=', 5)
            ->orwhere('role_id', '=', 6)
            ->orwhere('role_id', '=', 7)->get();

        // dd($l1);

        $l2 = user::
            where('role_id', '=', 1)
            ->orwhere('role_id', '=', 5)
            ->orwhere('role_id', '=', 6)
            ->orwhere('role_id', '=', 7)->get();

        $view = user::all()->where('is_deleted', 'N');

        return view('/user', compact('view', 'location3', 'role', 'l1', 'l2'));

    }

    public function edit_user(Request $request, $id)
    {

        // return $request->images;
        // die;
        //dd($request->image);
        //image
        $imageName = time() . '.' . $request->image->extension();
        //dd($imageName);

        $randimg = $request->image->move(('images/'), $imageName);

        $role = user::findorfail($id);
        $role->fname = request('fname');
        $role->lname = request('lname');
        $role->email = request('email');
        $role->mobile = request('mobile');
        $role->gender = request('gender');
        $role->designation = request('designation');
        $role->role_id = request('role');
        $role->location_id = request('user_location');
        $role->level_1 = request('label_1');
        $role->level_2 = request('label_2');
        $role->status = request('status');
        $role->images = $imageName;
        $role->modified_by = session('USER_ID');

        $role->save();

        $request->session()->flash('roleinster', 'user Update Successflly');
        return redirect('/user');
    }

    public function delete_user(Request $request, $id)
    {
        $role = user::findorfail($id);
        $role->is_deleted = "Y";
        $role->deleted_by = session('USER_ID');

        $role->save();
        $request->session()->flash('delt', 'User Delete Successflly');
        return redirect('/user');
    }

}