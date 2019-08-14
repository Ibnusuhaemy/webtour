<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';

    public function type_blog(){
        return $this->belongsTo('App\type_blog','id_type','id');
    }

    public function komentar(){
        return $this->hasMany('App\komentar','id_blog','id');
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('d, M Y');
    }
}
