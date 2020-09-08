<?php

namespace App\Http\Controllers;

use App\tipo_vehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    public function index(){
        $tipo_vehiculos = tipo_vehiculo::all();
        return response()->json($tipo_vehiculos, 200);
    }
    public function show($id){
        return response()->json(tipo_vehiculo::find($id), 200);
    }
    public function store(){
        $tipo_vehiculo = tipo_vehiculo::create(request()->all());
        return response()->json($tipo_vehiculo, 201);
    }
    public function update($id){
        $tipo_vehiculo = tipo_vehiculo::find($id);
        $tipo_vehiculo->update(request()->all());
        return response()->json($tipo_vehiculo, 200);
    }
    public function destroy($id){
        $tipo_vehiculo = tipo_vehiculo::find($id);
        $tipo_vehiculo->delete();
        return response()->json(['exito'=>'tipo vehiculo eliminado exitosamente con id: ' . $tipo_vehiculo->id], 200);
    }
}
