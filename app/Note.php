<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'author', 'title', 'content','category'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','email','author');
    }
}
