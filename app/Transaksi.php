<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
     protected $fillable = [
        'kasir_id', 'total', 'tax', 'grand_total',
    ];
    public function transaksi(){
        return $this->hasMany(Transaksi::class,'transaksi_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'kasir_id','id');
    }
}
