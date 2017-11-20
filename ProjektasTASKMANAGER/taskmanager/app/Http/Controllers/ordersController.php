<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;

class ordersController extends mainController
{
    public function orders(){
        $data=$this->content();

        $filterData=array(
            'orders'=>$data['orders'],
            'active'=>array(
                'main'=>'',
                'orders'=>'active',
                'transport'=>'',
                'tasks'=>'',
                'config'=>''
            )

        );
        return view('orders',$filterData);
    }
}
