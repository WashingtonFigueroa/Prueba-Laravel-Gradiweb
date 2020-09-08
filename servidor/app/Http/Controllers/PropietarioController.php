<?php

namespace App\Http\Controllers;

use App\propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index(){
        $propietarios = propietario::all();
        return response()->json($propietarios, 200);
    }
    public function show($id){
        return response()->json(propietario::find($id), 200);
    }
    public function store(){
        $propietario = propietario::create(request()->all());
        return response()->json($propietario, 201);
    }
    public function update($id){
        $propietario = propietario::find($id);
        $propietario->update(request()->all());
        return response()->json($propietario, 200);
    }
    public function destroy($id){
        $propietario = propietario::find($id);
        $propietario->delete();
        return response()->json(['exito'=>'Propietario eliminado exitosamente con id: ' . $propietario->id], 200);
    }
}
