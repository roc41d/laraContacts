<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contacts';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
