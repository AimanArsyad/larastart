<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = []; //make sure mass array can be done

    public function customers()
    {
        return $this->hasMany(Customer::class); //many to one relationship with customer
    }
}
