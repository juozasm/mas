<?php

namespace TaskManager\Http\Controllers; //includina package folderi kur zaisi.

use TaskManager\Statistic; /// includina clase
use Illuminate\Http\Request; // includina clase

class statisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello";
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
     * @param  \TaskManager\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function show(Statistic $Statistic)
    {
        return $Statistic;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TaskManager\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistic $Statistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TaskManager\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $Statistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TaskManager\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistic $Statistic)
    {
        //
    }
}
