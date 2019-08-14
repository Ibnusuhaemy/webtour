<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotel';

    public function paket(){
        return $this->belongsTo('App\paket','id_paket','id');
    }

}
