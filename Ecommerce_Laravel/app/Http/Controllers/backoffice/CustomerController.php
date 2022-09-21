<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{

    public function index(): View
    {
        $customers = Customer::all();
        return view("backoffice.customer.index", ["customers" => $customers]);
    }


    public function create(): View
    {
        return view("backoffice.customer.create");
    }


    public function store(Request $request): RedirectResponse
    {
        $customer = new Customer;
        $customer = $this->convert($request,$customer);
        $customer->save();
        return redirect(route("customers.index"));
    }

    public function show(Customer $customer)
    {
        //
    }


    public function edit(Customer $customer): View
    {
        return view("backoffice.customer.edit", ["customer" => $customer]);
    }


    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $customer = $this->convert($request, $customer);
        $customer->save();
        return redirect(route('customers.index'));
    }


    public function destroy(Customer $customer): RedirectResponse
    {
        $customer->delete();
        return redirect(route("customers.index"));
    }

    public function test()
    {
        $category = Product::find(3)->category->name;
        return view("backoffice.test", ["category" =>$category]);

    }

    public function convert(Request $request, Customer $customer): Customer
    {
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->postal_code = intval($request->postal_code);
        return $customer;
    }
}
