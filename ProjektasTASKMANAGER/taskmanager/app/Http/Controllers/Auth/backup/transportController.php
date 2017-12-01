<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;

class transportController extends mainController
{
    public function transport(){
        $data=$this->content();

        $filterData=array(
            'transport'=>$data['transport'],
            'active'=>array(
                'main'=>'',
                'orders'=>'',
                'transport'=>'active',
                'tasks'=>'',
                'config'=>''
            )

        );
        return view('transport',$filterData);
    }
}
