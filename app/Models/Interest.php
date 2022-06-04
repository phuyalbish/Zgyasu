<?php

namespace App\Models;
use App\Models\UserInterestBridge;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;
    
    public function userinterestbridge(){
        return $this->hasMany(UserInterestBridge::class);
    }
    public function branch(){
        
        return $this->belongsTo(Branch::class);
    }
}
