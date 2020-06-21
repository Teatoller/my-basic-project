<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    function list() {
        $customers = Customer::all();

        return view('internals.customer', [
            'customers' => $customers,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();

        return back();
    }
}
