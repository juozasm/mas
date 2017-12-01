<?php

namespace TaskManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // metodas autifi
use TaskManager\Archive;
use TaskManager\Clients;
use TaskManager\Files;
use TaskManager\Orders;
use TaskManager\Priority;
use TaskManager\Status;
use TaskManager\Tasks;
use TaskManager\Transport;
use TaskManager\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class HomeController extends Controller
{
    public $allInfo;
    public $menu;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->content(1);
        $data = $this->allInfo;
        $this->menu['main'] = 'active';
        $data['active'] = $this->menu;
        return view('main', $data);

    }

    public function content($pgs)
    {
        $allUsers = User::select(
            'users.id as user_id',
            'users.name as user_name')
            ->get();


        $orders = Orders::
        select(
            'orders.id',
            'users.name as user',
            'orders.order_number',
            'clients.id as client_id',
            'clients.name as client',
            'clients.telephone',
            'statuses.status',
            'statuses.status_description',
            'orders.start_date',
            'orders.planned_end_date',
            'orders.order_sum',
            DB::raw('orders.order_sum - orders.order_sum_paid as liko'),
            'orders.order_sum_paid',
            'orders.notes',
            'files.file_path',
            'transports.driver_name',
            'transports.driver_arrives',
            'orders.archives')
            ->leftjoin('users', 'users.id', '=', 'orders.user_id')
            ->leftjoin('clients', 'clients.id', '=', 'orders.client_id')
            ->leftjoin('statuses', 'statuses.id', '=', 'orders.status_id')
            ->leftjoin('transports', 'transports.id', '=', 'orders.transport_id')
            ->leftjoin('files', 'files.id', '=', 'orders.file_id')
            ->orderBy('archives')
            ->orderBy('id')
            ->paginate($pgs);

        $transports = Transport::
        select(
            'transports.id',
            'transports.driver_name',
            'orders.order_number',
            'clients.name as client',
            'clients.telephone as clients_telephone',
            'clients.adress',
            'transports.driver_arrives',
            'transports.telephone as drivers_telephone')
            ->leftjoin('orders', 'orders.id', '=', 'transports.order_id')
            ->leftjoin('clients', 'clients.id', '=', 'transports.client_id')
            ->paginate($pgs);
        //po archyvo reik i notes ideti driver
        $tasks = Tasks::
        select(
            'tasks.id',
            'users.name',
            'tasks.task',
            'tasks.start_date',
            'tasks.end_date',
            'priorities.priority',
            'files.file_path')
            ->leftjoin('users', 'users.id', '=', 'tasks.user_id')
            ->leftjoin('priorities', 'priorities.id', '=', 'tasks.priority_id')
            ->leftjoin('files', 'files.id', '=', 'tasks.file_id')
            ->paginate($pgs);

        $clients = Clients::select('*')
            ->get();
        $statuses = Status::select('*')
            ->get();

        $this->menu = array(
            'main' => '',
            'orders' => '',
            'transport' => '',
            'tasks' => '',
            'config' => ''
        );

        $this->allInfo = array(
            'allUsers' => $allUsers,
            'orders' => $orders,
            'transports' => $transports,
            'tasks' => $tasks,
            'clients' => $clients,
            'statuses' => $statuses,

        );

    }

    function test(Orders $orders)
    {

        $archive = Auth::id();


        return $archive;

    }
}
