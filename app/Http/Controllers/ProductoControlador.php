<?php

namespace proyecto\Http\Controllers;

use Illuminate\Http\Request;

use proyecto\Http\Requests;
use proyecto\Http\Controllers\Controller;
use proyecto\Imagen;
use proyecto\Categoria;
use proyecto\Presentacion;
use proyecto\Producto;
use DB;
class ProductoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imag=Imagen::Imagenes();        
        return view('admin/producto/index',compact('imag'));         

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catP=Categoria::lists('nombreCategoria','idcategoria');        
        $presP=Presentacion::lists('nombrePresentacion','idpresentacion');        
        return view('admin/producto/CreateProducto',compact('catP','presP'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        Producto::create([
            'nombreProducto'=>$request['name'],
            'precio'=>$request['preProd'],
            'descripcion'=>$request['desProd'],
            'idcategoria'=>$request['catProd'],
            'idpresentacion'=>$request['presProd'],
            ]);
            $imgn = DB::table('Productos')->max('idproducto');      

        Imagen::create([
            'direccion'=>$request['Imagen'],
            'idproducto'=>$imgn,
            ]);
        $imag=Imagen::Imagenes();        
        return view('admin/producto/index',compact('imag'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imag=Producto::find($id);
        $catP=Categoria::lists('nombreCategoria','idcategoria');        
        $presP=Presentacion::lists('nombrePresentacion','idpresentacion');  
        return view('admin/producto/edit',compact('imag','catP','presP'));
        /*
        $catP=Categoria::lists('nombre','idcategoria');        
        $presP=Presentacion::lists('nombre','idpresentacion');
        return view('admin/producto/edit',['producto'=>$prod,'Categoria'=>$catP,'Presentacion'=>$presP]);*/
        /*$prod = Producto::find($id);
        return view('admin/producto/edit', ['presentacion'=>$presentacion]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imag = Producto::find($id);
        $imag->nombreProducto=$request['name'];
        $imag->save();
        return redirect('admin/producto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
