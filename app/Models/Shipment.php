<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'origin_address_id',
        'destination_address_id',
        'scheduled_pickup_date',
        'delivery_date',
        'price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function originAddress()
    {
        return $this->belongsTo(Address::class, 'origin_address_id');
    }

    public function destinationAddress()
    {
        return $this->belongsTo(Address::class, 'destination_address_id');
    }

    // public function tracking()
    // {
    //     return $this->hasMany(ShipmentTracking::class);
    // }

    // public function payments()
    // {
    //     return $this->hasMany(Payment::class);
    // }

    // public function invoice()
    // {
    //     return $this->hasOne(Invoice::class);
    // }
}
