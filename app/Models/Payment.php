<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','shipment_id','amount','payment_method','payment_status'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function shipment(){
        $this->belongsTo(Shipment::class);
    }

    
}
