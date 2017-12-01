<?php

namespace TaskManager\Http\Controllers; //includina package folderi kur zaisi.

use TaskManager\Statistic; /// includina clase
use Illuminate\Http\Request; // includina clase


class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Statistics'] = Statistic::all();

        return view('Statistic', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Statistic_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // post and get method yra request viename
    {
        $Statistic = new Statistic(); // skliustelius riekia kuriant objekta

        $Statistic->title = $request->title;
        $Statistic->count = $request->count;

        $Statistic->save();

        return redirect()->route('Statistic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Taskmanager\Statistic  $Statistic
     * @return \Illuminate\Http\Response
     */
    public function show(Statistic $Statistic)
    {
        $data['Statistic'] = $Statistic;

        return view('Statistic_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Taskmanager\Statistic  $Statistic
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistic $Statistic)
    {
        $data['Statistic'] = $Statistic;

        return view('Statistic_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Taskmanager\Statistic  $Statistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistic $Statistic)
    {
        $Statistic->title = $request->title;
        $Statistic->count = $request->count;
        $Statistic->save();

        return redirect()->route('Statistic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Taskmanager\Statistic  $Statistic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistic $Statistic)
    {
        $Statistic->delete();
        return redirect()->route('Statistic.index');
    }
}
