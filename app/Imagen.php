<?php

namespace proyecto;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Imagen extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = 'idimagenes';
    protected $guarded = ['idimagenes'];
  	protected $fillable = ['direccion','idproducto'];


	 public function setDireccionAttribute($direccion){
	 	
		 	$name=Carbon::now()->second.$direccion->getClientOriginalName();
		 	$this->attributes['direccion'] = Carbon::now()->second.$direccion->getClientOriginalName();		 	
		 	\Storage::disk('local')->put($name,\File::get($direccion));
	 	
	 }

	public static function Imagenes(){
		return DB::table('imagenes')
		->join('productos','productos.idproducto','=','imagenes.idproducto')
		->join('categorias','categorias.idcategoria','=','productos.idcategoria')		
		->join('presentaciones','presentaciones.idpresentacion','=','productos.idpresentacion')
		->select('imagenes.*', 'productos.*','categorias.*','presentaciones.*')
		->get();
	} 
}
