<?php

namespace TaskManager\Http\Controllers;

use TaskManager\Lithuania;
//use TaskManager\Statistic;
use Illuminate\Http\Request;

class lithuaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Lithuania::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \TaskManager\Lithuania  $lithuania
     * @return \Illuminate\Http\Response
     */
    public function show(Lithuania $Lithuanium)
    {
        //
        return $Lithuanium['title'];



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TaskManager\Lithuania  $lithuania
     * @return \Illuminate\Http\Response
     */
    public function edit(Lithuania $lithuania)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TaskManager\Lithuania  $lithuania
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lithuania $lithuanium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TaskManager\Lithuania  $lithuania
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lithuania $lithuania)
    {
        //
    }
}
