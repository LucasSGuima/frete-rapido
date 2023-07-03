<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotes_id',
        'carrier_name',
        'carrier_reference',
        'service',
        'final_price',
        'deadline',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class, 'quotes_id');
    }
}
