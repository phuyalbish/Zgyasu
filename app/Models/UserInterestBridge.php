<?php

namespace App\Models;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterestBridge extends Model
{
    // use HasFactory;

    protected $table = 'userinterestbridges';

    public function interest(){
        return $this->belongsTo(Interest::class);
    }
    
}

