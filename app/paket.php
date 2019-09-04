<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table = 'paket';

    public function type_paket(){
        return $this->belongsTo('App\type_paket','id_type','id');
    }

    public function destinasi(){
        return $this->hasMany('App\destinasi','id_paket','id');
    }

    public function rencana(){
        return $this->hasMany('App\rencana','id_paket','id');
    }

    public function testimoni(){
        return $this->hasMany('App\testimoni','id_paket','id');
    }

    public function faqs(){
        return $this->hasMany('App\faqs','id_paket','id');
    }

    public function fasilitas(){
        return $this->hasMany('App\fasilitas','id_paket','id');
    }

    public function hotel(){
        return $this->hasMany('App\hotel','id_paket','id');
    }
}
