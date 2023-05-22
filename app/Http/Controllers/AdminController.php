<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:super-admin');
        //$this->middleware('role:manager');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View {
        if (auth()->user()->hasRole('super-admin') || auth()->user()->hasRole('manager')) {
            return view('admin.pages.index', [
                'user' => $request->user(),
            ]);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function roles(): View {
        if (auth()->user()->hasRole('super-admin')) {
            $data['roles'] = Role::all();
            $data['users'] = User::all();
            $data['permissions'] = Permission::all();
            return view('admin.pages.users.role.list', [
                'data' => $data,
            ]);
        }
        else {
            return view('admin.pages.index', [
                ['access dined'],
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
