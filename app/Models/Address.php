<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'street_address',
        'city',
        'country',
        'zip_code',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
