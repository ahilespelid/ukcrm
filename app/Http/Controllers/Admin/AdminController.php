<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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

    public function index(Request $request): View {
        if (auth()->user()->hasRole('super-admin') || auth()->user()->hasRole('manager')) {
            return view('admin.dashboard', [
                'user' => $request->user(),
            ]);
        }
    }
}
