<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OwnerController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:owner');
    }

    public function index(Request $request): View {
        if (auth()->user()->hasRole('owner')) {
            return view('lk.pages.lk', [
                'user' => $request->user(),
            ]);
        }
    }
    public function indication(Request $request): View {
        if (auth()->user()->hasRole('owner')) {
            return view('lk.pages.indication', [
                'user' => $request->user(),
            ]);
        }
    }
    public function charges(Request $request): View {
        if (auth()->user()->hasRole('owner')) {
            return view('lk.pages.charges', [
                'user' => $request->user(),
            ]);
        }
    }
}
