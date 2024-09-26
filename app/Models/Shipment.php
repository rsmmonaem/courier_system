<?php

namespace App\Models;

use App\Models\User;
use App\Models\Address;
use App\Models\ShipmentTracking;
use App\Models\Payment;
use App\Models\Invoice;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'origin_address_id', 'destination_address_id', 'status', 'tracking_number', 'scheduled_pickup_date', 'delivery_date', 'price'
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

    public function tracking()
    {
        return $this->hasMany(ShipmentTracking::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
