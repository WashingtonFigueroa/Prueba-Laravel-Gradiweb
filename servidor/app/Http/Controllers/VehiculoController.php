<?php

namespace App\Http\Controllers;

use App\vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos = vehiculo::all();
        return response()->json($vehiculos, 200);
    }
    public function show($id){
        return response()->json(vehiculo::find($id), 200);
    }
    public function store(){
        $vehiculo = vehiculo::create(request()->all());
        return response()->json($vehiculo, 201);
    }
    public function update($id){
        $vehiculo = vehiculo::find($id);
        $vehiculo->update(request()->all());
        return response()->json($vehiculo, 200);
    }
    public function destroy($id){
        $vehiculo = vehiculo::find($id);
        $vehiculo->delete();
        return response()->json(['exito'=>'Vehiculo eliminado exitosamente con id: ' . $vehiculo->id], 200);
    }
    public function search(){
        $value = request()->input('value');
        $Marca = vehiculo::where('marca', 'like', '%'.$value.'%')
            ->orWhere('placa', 'like', '%'.$value. '%')->get();
        return response()->json($Marca, 201);
    }
}
