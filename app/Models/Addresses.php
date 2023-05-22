<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    public function licevoystchet()
    {
        return $this->hasOne(Licevoystchet::class);
    }

    public function houses()
    {
        return $this->belongsTo('App\Houses');
    }
}
