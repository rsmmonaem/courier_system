<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentTracking extends Model
{
    use HasFactory;

    protected $fillable = ['shipment_id','location', 'status_update'];

    public function shipment(){
        $this->belongsTo(Shipment::class, 'shipment_id', 'id');
    }

    
}

