<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Pesanan extends Pivot
{
    use HasFactory;
    protected $table = 'pesanans';
    public function pengiriman()
    {
        return $this->belongsTo(Pengiriman::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
