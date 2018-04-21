<?php

namespace App\Http\Controllers;

use App\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();//database bata all list extract
        Log::debug("customers retrieved",["size" =>count($customers)]);
        Log::info("Successfully retrieved customers");

        return view('customer.index',compact('customers'));

    }

    public function show ($id){
        return view('customer.show',['customer' => Customer::findOrFail($id)]);
    }

    public function create (){

        return view('customer.create');
    }

    public function store (Request $request){

        $customer = Customer::create($request->all());
        return view('customer.index',['customers' => Customer::all()]);

    }


}
