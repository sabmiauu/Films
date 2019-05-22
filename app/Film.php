<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name', 'year', 'duration', 'trailer', 'genre_id'
    ];

    public function genre() {
        return $this->belongsTo('App\Genre');
    }

    public function collections() {
        return $this->belongsToMany('App\Collection');
    }
}
