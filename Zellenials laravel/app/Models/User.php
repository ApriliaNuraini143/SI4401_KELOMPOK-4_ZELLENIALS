<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function produks(){
        return $this->belongsToMany(Produk::class,'pesanans','user_id','produk_id');
    }
    public function customs(){
        return $this->belongsToMany(Custom::class,'orders','user_id','custom_id');
    }
}
