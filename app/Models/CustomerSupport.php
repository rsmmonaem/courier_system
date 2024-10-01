<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSupport extends Model
{
    use HasFactory;



    protected $fillable = ['user_id', 'message', 'timestamp', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customerSupport()
    {
        return $this->hasMany(CustomerSupport::class);
    }

}
