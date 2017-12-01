<?php

namespace TaskManager\Http\Controllers;

use TaskManager\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TaskManager\User;


class OrdersController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->content(20);
        $data=$this->allInfo;
        $this->menu['orders']='active';
        $data['active'] = $this->menu;

        return view('orders',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actions/add/orders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Order = new Orders(); // skliustelius riekia kuriant objekta

        $Order->order_number = $request->order_number;
        $Order->id;
        $Order->user_id=1;
        $Order->client_id=1;
        $Order->status_id=0;
        $Order->start_date='2017-06-07 16:00';
        $Order->planned_end_date='2017-06-07 16:00';
        $Order->order_sum=0;
        $Order->order_sum_paid=0;
        $Order->notes=0;
        $Order->file_id=0;


        $Order->save();
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TaskManager\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $order)
    {
        $this->content(1);
        $data=$this->allInfo;
        $data['current']=$order;
        $this->menu['orders']='active';
        $data['active'] = $this->menu;

        return view('actions/view/orders', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TaskManager\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $order)
    {
        $this->content(20);
        $data=$this->allInfo;
        $data['current']=$order;
        $this->menu['orders']='active';
        $data['active'] = $this->menu;
        return view('actions\edit\orders',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TaskManager\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $order)
    {
        $order->order_number = $request->order_number;
        $order->user_id = $request->user_id;
        $order->client_id = $request->client_id;
        $order->status_id = $request->status_id;
        $order->start_date = $request->start_date;
        $order->planned_end_date = $request->planned_end_date;
        $order->order_sum = $request->order_sum;
        $order->order_sum_paid = $request->order_sum_paid;
        $order->notes = $request->notes;
        $order->save();

        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TaskManager\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }

    public function archive($id,$home){
        $archive=Orders::where('id',$id)->get();
        if ($archive[0]->archives=='0'){
            DB::table('orders')
                ->where('id', $id)
                ->update(['archives' => 1]);
        }else {
            DB::table('orders')
                ->where('id', $id)
                ->update(['archives' => 0]);
        }
        if ($home==0){
            return redirect()->route('home');
        }
        else{
        return redirect()->route('orders.index');
        }
    }
}
