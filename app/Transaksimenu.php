<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksimenu extends Model
{
    protected $fillable = [
        'menu_id', 'transaksi_id', 'quantity', 'price', 'total',
    ];
    public function menu(){
        return $this->belongsTo(Menu::class,'menu_id','id');
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class,'transaksi_id','id');
    }
}
