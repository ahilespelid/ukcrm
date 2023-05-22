<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;

    protected $table = 'group_houses';

    public function addresses()
    {
        return $this->hasMany('App\Addresses');
    }
}
