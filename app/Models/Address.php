<?php

namespace App\Models;

use App\Models\Shipment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'street', 'city', 'state', 'zip_code', 'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipmentsAsOrigin()
    {
        return $this->hasMany(Shipment::class, 'origin_address_id');
    }

    public function shipmentsAsDestination()
    {
        return $this->hasMany(Shipment::class, 'destination_address_id');
    }
}
