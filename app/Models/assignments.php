<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    use HasFactory;
    public function getDateFormat(){
       return 'Y-d-m h:m:s';
      }


    // Especifica el nombre de la tabla
    protected $table = 'assignments';

    // Permitir asignación masiva de estos campos
    protected $fillable = ['people_id', 'item_id'];

    // Laravel manejará automáticamente las fechas sin necesidad de formatearlas
    public $timestamps = true;

    public function people()
    {
        return $this->belongsToMany('App\Models\Person');
    }

    public function items()
    {
        return $this->belongsToMany('App\Models\Item');
    }
}
