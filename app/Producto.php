<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;
use DB;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    protected $guarded = ['idproducto'];
  	protected $fillable = ['nombreProducto','precio','descripcion','idcategoria','idpresentacion'];



}
