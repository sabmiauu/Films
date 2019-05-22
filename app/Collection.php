<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function film() {
        return $this->belongsToMany('App\Film');
    }
}
