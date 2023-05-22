<?php

namespace App\Http\Controllers;

use App\Models\Houses;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->hasRole('super-admin') || auth()->user()->hasRole('manager')) {
            $data['houses'] = Houses::all();
            return view('admin.pages.objects.list', [
                'data' => $data,
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
        $request->validate([
            'name' => 'required',
        ]);
        $new = new Houses();
        $new->name = $request->name;
        $new->active = true;
        $new->save();

        return redirect()->route('objects.index')->with('success','Создана новая группа домов');
    }

    /**
     * Display the specified resource.
     */
    public function show(Houses $houses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Houses $houses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Houses $houses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Houses $houses)
    {
        //
    }
}
