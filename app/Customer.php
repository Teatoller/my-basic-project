<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'active', 'company_id'];

    protected $attributes = [
        'active' => 1,
    ];

    // accessors & muttators

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    // laravel scope
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress',
        ];
    }

}