<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatSucursal;

class catSucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales=CatSucursal::orderBy('id', 'ASC')->get();
        return view('sucursales.index')->with('sucursales', $sucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal=CatSucursal::where('latitud', $request->latitud)
                             ->where('longitud', $request->longitud)->get();
        if (!$sucursal->isNotEmpty()) {
            $sucursal= new CatSucursal($request->all());
            $sucursal->save();
            Alert::success('Sucursal registrada con éxito.', 'Hecho')->persistent("Aceptar")->autoclose(2000);
            return redirect(route('sucursal.index'));
        } else {
            Alert::error('Ya existe la sucursal '.$request->nombre.'.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
