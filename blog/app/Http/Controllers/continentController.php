<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Country;
use Illuminate\Http\Request;

class continentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $text = "labas";
        return $text;
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
     * @param  \App\Continent  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $continent = Continent::where('slug', $slug)->first();

        $countries = Country::where('continent', $continent->id)->orderBy('title', 'DESC')->paginate(20);

        $country = Country::find([1, 2, 6]);

        $data = [
            'continent' => $continent,
            'countries'   => $countries,
            'country'   => $country
        ];

        return view('continent.continent', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function edit(Continent $continent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Continent $continent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Continent $continent)
    {
        //
    }
}
