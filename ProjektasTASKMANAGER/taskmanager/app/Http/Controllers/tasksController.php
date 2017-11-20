<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends mainController
{
    public function tasks(){
        $data=$this->content();

        $filterData=array(
            'tasks'=>$data['tasks'],
            'active'=>array(
                'main'=>'',
                'orders'=>'',
                'transport'=>'',
                'tasks'=>'active',
                'config'=>''
            )

        );
        return view('tasks',$filterData);
    }
}
