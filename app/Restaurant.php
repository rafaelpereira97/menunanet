<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
