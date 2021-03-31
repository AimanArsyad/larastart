<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = Customer::all();
    
        return view('internals.customers', [
            'customers' => $customers,
        ]);

    }

    public function store()
    {
        
    }
}
