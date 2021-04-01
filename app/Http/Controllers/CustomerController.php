<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {   
        $customers = Customer::all();
        


        return view('customers.index', compact('customers')); 

    }

    public function create()
    {
        $companies = Company::all(); 
        return view('customers.create',compact('companies'));
    }

    public function store()
    {
        $data = request()->validate
        ([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'company_id'=> 'required',
        ]);

        Customer::create($data);

        return redirect('customers');    
    }
    public function show(Customer $customer)
    {
       return view('customers.show', compact('customer'));
    }

}
