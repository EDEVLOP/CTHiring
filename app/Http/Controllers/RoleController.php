<?php

namespace App\Http\Controllers;

use App\Models\role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role_branch()
    {

        $view = role::all()->where('is_deleted', 'N');

        return view('/role', compact('view'));
    }

    public function add_rolebranch(Request $request)
    {
        $role = new role;
        $role->role_name = request('role_name');
        $role->role_des = request('role_des');
        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'Role Inserted Successflly');
        return redirect('/role');
    }

    public function edit_rolebranch(Request $request, $id)
    {
        $role = role::findorfail($id);
        $role->role_name = request('role_name');
        $role->role_des = request('role_des');
        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'Role Update Successflly');
        return redirect('/role');
    }
    public function delete_rolebranch(Request $request, $id)
    {
        $role = role::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'Role Delete Successflly');
        return redirect('/role');
    }
}
