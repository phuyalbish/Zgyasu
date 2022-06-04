<?php

namespace App\Models;
use App\Models\Interest;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public function interest(){
        return $this->hasMany(UserInterestBridge::class);
    }
}
