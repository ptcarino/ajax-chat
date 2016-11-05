<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'body',
        'users_id',
        'created_at',
        'updated_at',
    ];

    public function users() {
        $this->belongsTo('App\User');
    }
}
