<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model // Asegúrate de que esté en mayúsculas
{
    use HasFactory;

    // Especifica el nombre correcto de la tabla
    protected $table = 'people';

    public function getDateFormat(){
        return 'Y-m-d H:i:s'; // Usa el formato correcto para timestamps
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function assignments()
    {
        return $this->belongsToMany('App\Models\Assignment');
    }
}
