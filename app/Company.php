<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = ['name', 'phone'];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}