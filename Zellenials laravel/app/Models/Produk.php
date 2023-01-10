<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsToMany(User::class,'pesanans','produk_id','user_id')->withPivot('jumlah', 'status', 'invoice','created_at','id', 'size','alasan_retur','foto_retur')->as('pesanan');
    }
}
