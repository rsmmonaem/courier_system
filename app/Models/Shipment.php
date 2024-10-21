<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
         'id',
        'tracking_number'         ,
        'scheduled_pickup_date'    ,
        'delivery_date'           ,
        'status',
        'suser_name' ,             
        'suser_number'     ,       
        'ruser_name'    ,           
        'ruser_number'    ,       
        'delivery_charge'        ,
        'service_charge'      ,    
        'cod'                 ,   
        'total'         ,           
        'product_details'         , 
        'product_weight' ,       
        'product_lot'  ,          
        'product_quantity'      ,
        'remark'    ,            
        'origin_address'   ,      
        'destination_address'   ,
    ];

    protected $casts = [
        'scheduled_pickup_date' => 'datetime',
        'delivery_date' => 'datetime',
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
