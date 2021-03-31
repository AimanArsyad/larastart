@extends('layout')

@section('content')
<h1>Customers</h1>

<ul>
    <?php
        foreach ($customers as $customers) {
                echo '<li>' . $customers . '</li>';
        }
    ?>
</ul>
