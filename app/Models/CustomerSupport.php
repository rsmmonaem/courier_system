<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerSupport extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'message', 'timestamp', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
