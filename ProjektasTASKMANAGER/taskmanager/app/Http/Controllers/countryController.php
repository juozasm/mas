<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;

class countryController extends Controller
{
    public function getCountry($slug){

        $countries = [
            'spain' => [
                'title'     =>  'Spain',
                'capital'   =>  'Madrid',
                'population'=>  46468102,
                'area'      =>  505990
            ],
            'france' => [
                'title'     =>  'France',
                'capital'   =>  'Paris',
                'population'=>  67158000,
                'area'      =>  640679
            ],
            'italy' => [
                'title'     =>  'Italy',
                'capital'   =>  'Rome',
                'population'=>  60589445,
                'area'      =>  301338
            ],
            'germany' => [
                'title'     =>  'Germany',
                'capital'   =>  'Berlin',
                'population'=>  82349400,
                'area'      =>  357168
            ],
            'greece' => [
                'title'     =>  'Greece',
                'capital'   =>  'Athens',
                'population'=>  11183716,
                'area'      =>  131957
            ]
        ];

        $data = [
            'slug'          => $slug,
            'title'         => $countries[$slug]['title'],
            'description'   => 'Info about country',
            'population'    => $countries[$slug]['population'],
            'capital'       => $countries[$slug]['capital'],
            'area'          => $countries[$slug]['area']
        ];

        return view('country', $data);
    }
}