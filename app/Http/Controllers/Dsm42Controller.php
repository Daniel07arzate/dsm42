<?php

namespace App\Http\Controllers;

use App\Models\dsm42;
use Illuminate\Http\Request;

class Dsm42Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
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
    public function show(dsm42 $dsm42)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dsm42 $dsm42)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dsm42 $dsm42)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dsm42 $dsm42)
    {
        //
    }
}
