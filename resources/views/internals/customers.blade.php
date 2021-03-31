@extends('layout')

@section('title','Customer list')


@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers List</h1>    
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="customers" method="POST">

 @csrf

    
        <div class="form-group pb-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            <div> {{ $errors->first('name')}} </div>  
        </div>   
    
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            <div> {{ $errors->first('email')}} </div>  
        </div>  

        <div class="form-group">
            <label for="active">Status</label>
            <select name="active" id="active">
                <option value="" disabled>Select customer status</option>
                <option value ="1">Active</option>
                <option value ="0">Inactive</option>
            </select>
        </div> 
    
    

        <button type="submit" class="btn btn-primary">Add Customer</button>

 
        </form>    


    </div>
    
</div>

<hr>

<div class="row">
    <div class="col-6">
        <h3>Active Customers</h3>
        <ul>
    
        @foreach ($activeCustomers as $activeCustomers) 
                <li>{{  $activeCustomers->name }} <span class="text-muted">({{ $activeCustomers->email}})</span></li>
        @endforeach
    
        </ul>
    </div>




{{ $errors->first('name')}}


    <div class="col-6">
         <h3>Inactive Customers</h3>
        <ul>
    
        @foreach ($inactiveCustomers as $inactiveCustomers) 
                <li>{{  $inactiveCustomers->name }} <span class="text-muted">({{ $inactiveCustomers->email}})</span></li>
        @endforeach
    
        </ul>
    </div>
</div>
@endsection
