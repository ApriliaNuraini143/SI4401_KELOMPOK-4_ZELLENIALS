<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function produks(){
        return $this->belongsToMany(Produk::class,'pesanans','user_id','produk_id')->withPivot('jumlah', 'status', 'invoice','created_at','id', 'size', 'foto_pembayaran','alasan_retur','foto_retur')->as('pesanan');
    }
    public function customs(){
        return $this->hasMany(Custom::class,'user_id');
    }
}
