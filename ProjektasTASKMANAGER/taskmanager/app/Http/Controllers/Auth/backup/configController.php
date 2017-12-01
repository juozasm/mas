<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;

class configController extends mainController
{
    public function config(){
        $data=$this->content();

        $filterData=array(
            'config'=>$data['config'],
            'active'=>array(
                'main'=>'',
                'orders'=>'',
                'transport'=>'',
                'tasks'=>'',
                'config'=>'active'
            )

        );
        return view('config',$filterData);
    }
}
