<?php

namespace proyecto\Http\Controllers;

use Illuminate\Http\Request;

use proyecto\Http\Requests;
use proyecto\Http\Controllers\Controller;
use proyecto\Categoria;

class CategoriaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorie = Categoria::name($request->get('name'))->orderBy('nombreCategoria', 'DESC')->paginate(7);

        return view ('admin/categoria/index', compact('categorie'));
        //return view('admin/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/categoria/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categoria::create(['nombreCategoria' => $request['nombre'],]);
        return redirect('admin/categoria')->with('message','store');
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
         //return view('admin/categoria/edit',['idcategoria' => $id]);
         $categoria = Categoria::find($id);
        return view('admin/categoria/edit', ['categoria'=>$categoria]);
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
        /*$categoria = Categoria::find($id);
        $categoria->nombreCategoria = $request['nombreCategoria'];
        $categoria->save();
        return redirect('admin/categoria')->with('message','edit');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$categoria = Categoria::find($id);
        $categoria = delete();*/
    }
}
