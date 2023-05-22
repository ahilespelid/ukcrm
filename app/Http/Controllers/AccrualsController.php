<?php

namespace App\Http\Controllers;

use App\Models\Accruals;
use Illuminate\Http\Request;

class AccrualsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['items'] = '';
        return view('admin.pages.accruals.list')->with('data', $data);
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
    public function show(Accruals $accruals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accruals $accruals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accruals $accruals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accruals $accruals)
    {
        //
    }
}
