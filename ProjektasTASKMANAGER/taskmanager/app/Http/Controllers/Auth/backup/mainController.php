<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;


class mainController extends Controller
{
 public $orders="uzsakymai";
 public $transport="transportas";
 public $tasks="taskai";
 public $config="nustatymai";

    public function main(){

    $data=$this->content();
    $data['active']=array(
        'main'=>'active',
        'orders'=>'',
        'transport'=>'',
        'tasks'=>'',
        'config'=>''
    );
    return view('main',$data);

}
    public function content(){



        $data = array(
            'title' => "Task Manager",
            'orders' => [
                'info' => $this->orders,
                'title' => "Užsakymai"
            ],
            'transport' => [
                'info' => $this->transport,
                'title' => "Transportas"
            ],
            'tasks' => [
                'info' => $this->tasks,
                'title' => "Užduotys"
            ],
            'config' => [
                'info' => $this->config,
                'title' => "config"
            ]

        );

        return $data;
    }

}