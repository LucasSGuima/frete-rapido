<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'registered_number_shipper',
        'registered_number_dispatcher',
        'zipcode_origin'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class, 'quotes_id');
    }
}
