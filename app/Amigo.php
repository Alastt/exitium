<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amigo extends Model
{
    protected $table = "amigos";

    protected $fillable = ['nombre', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
