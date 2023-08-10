<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    use HasFactory;


    public function people()
    {
        return $this->belongsToMany('App\Models\Person');
    }

    public function items()
    {
        return $this->belongsToMany('App\Models\Item');
    }
}
