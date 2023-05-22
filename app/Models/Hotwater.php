<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotwater extends Model
{
    use HasFactory;

    public function licevoystchet()
    {
        return $this->belongsTo('App\Models\Licevoystchet');
    }
}
