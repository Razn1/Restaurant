<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nama_menu', 'quantity', 'harga',
    ];
    public function menu(){
        return $this->hasMany(Menu::class);
    }
}
