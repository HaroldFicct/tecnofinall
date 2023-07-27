<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{

    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index',['carreras'=>$carreras]);
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $carrera= new Carrera();
        $carrera->nombre=request('nombre');
        $carrera->facultadcodigo=request('facultadcodigo');
        $carrera->carreracodigo=request('carreracodigo');
        $carrera->save();
        return redirect('/carreras');
    }

    public function show($id)
    {
        return view('carreras.show',['carrera'=>Carrera::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('carreras.edit',['carrera'=>Carrera::findOrFail($id)]);
    }

    public function update(Request $request,$id)
    {
        $carrera= Carrera::findOrFail($id);
        $carrera->nombre=$request->get('nombre');
        $carrera->facultadcodigo=$request->get('facultadcodigo');
        $carrera->carreracodigo=$request->get('carreracodigo');
        $carrera->update();
        return redirect('/carreras');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera= Carrera::findOrFail($id);
        $categoria->delete();
        return redirect('/carreras');
    }
}
