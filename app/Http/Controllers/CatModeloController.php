<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModelo;
use Alert;

class CatModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = CatModelo::orderBy('id', 'ASC')->paginate(10);
        return view('modelo.index')->with('modelos', $modelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo=CatModelo::where('modelo', '=', $request->modelo)->get();
        if($modelo->isNotEmpty()){
            Alert::error('Ya existe '. $request->modelo.' en el catálogo de modelos.', 'Error')->persistent("OK");
            return back()->withInput();
        }else {
            $modelo = new CatModelo($request->all());
            $modelo->save();
            Alert::success('Modelo registrada con éxito.', 'Hecho')->persistent("Aceptar")->autoclose(2000);
            return redirect()->route('modelo.index');
        }
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
        $modelo = CatModelo::find($id);
        if($modelo == null){
            return redirect()->route('modelo.index');
        }else{
            return view('modelo.edit')->with('modelo', $modelo);
        }
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
        $comprobar=CatModelo::where('id', '=', $id)->get();
        
        if ($comprobar[0]->modelo==$request->modelo) {
            Alert::success('modelo guardada sin modificaciones.', 'Hecho')->persistent("Aceptar")->autoclose(2000);
            return redirect()->route('modelo.index');
        }

        $modelo=CatModelo::where('modelo', '=', $request->modelo)->get();
        if($modelo->isNotEmpty()){
            Alert::error('Ya existe '. $request->modelo.' en el catálogo de modelos.', 'Error')->persistent("OK");
            return redirect()->route('modelo.index');
        }else {
            $modelo = CatModelo::find($id);
            $modelo->fill($request->all());
            $modelo->save();
            Alert::success('Modelo actualizado con éxito.', 'Hecho')->persistent("Aceptar")->autoclose(2000);
            return redirect()->route('modelo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $modelo = CatModelo::find($id);
            $modelo->delete();
            Alert::success('Modelo eliminada con éxito.', 'Hecho')->persistent("Aceptar")->autoclose(2000);
            return redirect()->route('modelo.index');
    }
}
