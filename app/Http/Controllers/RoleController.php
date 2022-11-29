<?php

namespace App\Http\Controllers;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {

        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        //dd($request->input('permissions'));
        $request->validate([
            'name' =>'required',
        ]);

        \App\Models\Role::create([
            'name' => $request->name
        ])->syncPermissions($request->permissions);
        return redirect()->route('roles.index');
    }

    public function giveRole(){
        $user = User::findOrFail(4);
        $user->assignRole(\App\Models\Role::ROLE_USERS1);
        return 'success';
    }

}
