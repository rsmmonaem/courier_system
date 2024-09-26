<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Total_Sales',
        'refer_code',
        'refer_by',
        'Total_sale_commission',
        'wallet_balance'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
