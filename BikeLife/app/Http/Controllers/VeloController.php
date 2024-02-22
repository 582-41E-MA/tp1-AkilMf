<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from tasks; 
        $velos = Velo::all();
        return view('velo.index', ["velos" => $velos]);
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
    public function show(Velo $velo)
    {
        //$task =  select * from table where id = $task
        return view('velo.show', ['velo' => $velo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Velo $velo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Velo $velo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Velo $velo)
    {
        //
    }
}
