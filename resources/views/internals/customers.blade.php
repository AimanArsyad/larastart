@extends('layout')

@section('content')
<h1>Customers</h1>

<form action="customer" method="POST" class="pb-5">
    <div class="input-group">
        <input type="text">
    </div>

    <button type="submit">Add Customer<button>    
</form>

<ul>
    <?php
        foreach ($customers as $customers) {
                '<li>'{{  $customers->name }}'</li>';
        }
    ?>
</ul>
