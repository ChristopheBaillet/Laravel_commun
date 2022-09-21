<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{

    public function index(): View
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
        return view("backoffice.order.index", ["orders" => $orders]);
    }


    public function create(): View
    {
        $customers = Customer::select('first_name')->get();
        return view("backoffice.order.create", ["customers" => $customers]);
    }


    public function store(Request $request): RedirectResponse
    {
        $order = new Order;
        $order = $this->convert($request, $order);
        $order->save();
        return redirect(route("orders.index"));
    }


    public function show(int $id)
    {
        //
    }


    public function edit(int $id): View
    {
        $customers = Customer::select('first_name')->get();
        $order = Order::find($id);
        $order->customer = Customer::select("first_name")->where("id", $order->customer_id)->get()[0]->first_name;
        return view("backoffice.order.edit", ["order" => $order, "customers" => $customers]);
    }


    public function update(Request $request, Order $order): RedirectResponse
    {
        $order = $this->convert($request, $order);
        $order->save();
        return redirect(route('orders.index'));
    }


    public function destroy(int $id): RedirectResponse
    {
        $order = Order::find($id);
        $order->delete();
        return redirect(route("orders.index"));
    }

    public function convert(Request $request, Order $order): Order
    {
        $order->customer_id = Customer::select("id")->where('first_name', $request->customer)->get()[0]->id;
        $order->date = $request->date;
        return $order;
    }

}
