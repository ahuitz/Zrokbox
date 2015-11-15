<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model 

{
    protected $table = 'categorias';
    protected $primaryKey = 'idcategoria';
    protected $guarded = ['idcategoria'];
  	protected $fillable = ['nombreCategoria'];


  	 public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            # code...
            $query->where(\DB::raw("CONCAT(nombreCategoria)"), "LIKE", "%$name%");
        }
        
    }
}
