<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;


class Presentacion extends Model
{
    protected $table = 'presentaciones';
    protected $primaryKey = 'idpresentacion';
  	protected $fillable = ['nombrePresentacion'];
  	protected $guarded = ['idpresentacion'];
  	
  	public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            # code...
            $query->where(\DB::raw("CONCAT(nombrePresentacion)"), "LIKE", "%$name%");
        }

	}
  	
}