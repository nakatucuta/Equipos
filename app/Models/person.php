<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    public function getDateFormat(){
        return 'Y-d-m h:m:s';
      }
    
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
}
