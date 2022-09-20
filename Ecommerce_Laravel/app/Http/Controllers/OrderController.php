<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $customers = Customer::all();
        foreach ($orders as $order) {
            foreach ($customers as $customer) {
                if ($customer->id == $order->customer_id) {
                    $order->customer_name = $customer->first_name;
                }
            }
        }
        return view("backoffice.order", ["orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::select('first_name')->get();
        return view("backoffice.order-create", ["customers" => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order = $this->convert($request, $order);
        $order->save();
        return redirect(route("orders.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::select('first_name')->get();
        $order = Order::find($id);
        $order->customer = Customer::select("first_name")->where("id", $order->customer_id)->get()[0]->first_name;
        return view("backoffice.order-edit", ["order" => $order, "customers" => $customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order = $this->convert($request, $order);
        $order->save();
        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect(route("orders.index"));
    }

    public function convert(Request $request, Order $order)
    {
        $order->customer_id = Customer::select("id")->where('first_name', $request->customer)->get()[0]->id;
        $order->date = $request->date;
        return $order;
    }

}
