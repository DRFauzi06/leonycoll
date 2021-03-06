<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function kodes(){
        return $this->belongsTo(kode::class,'kodeBaju');
    }
}
