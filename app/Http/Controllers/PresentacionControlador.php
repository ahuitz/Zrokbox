<?php

namespace proyecto\Http\Controllers;

use Illuminate\Http\Request;

use proyecto\Http\Requests;
use proyecto\Http\Controllers\Controller;
use proyecto\presentacion;
class PresentacionControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $presentation = Presentacion::name($request->get('name'))->orderBy('nombrePresentacion', 'DESC')->paginate(7);                
        return view('admin/presentacion/index',compact('presentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/presentacion/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Presentacion::create([
            'nombrePresentacion' => $request['nombre'],
            ]);

        return redirect('admin/presentacion')->with('message','store');

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
        $presentacion = Presentacion::find($id);
        return view('admin/presentacion/edit', ['presentacion'=>$presentacion]);
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
        $presentacion = Presentacion::find($id);
        $presentacion->nombrePresentacion = $request['nombrePresentacion'];
        $presentacion->save();
        return redirect('admin/presentacion')->with('message','edit');
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
