<?php
namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;
class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = categoria::all();
        return view('categorias.index',['categorias'=>$categorias]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $categoria= new Categoria();
        $categoria->descripcion=request('descripcion');
        $categoria->save();
        return redirect('/categorias');
    }

    public function show($id)
    {
        return view('categorias.show',['categoria'=>Categoria::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('categorias.edit',['categoria'=>Categoria::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $categoria= Categoria::findOrFail($id);
        $categoria->descripcion=$request->get('name');
        $categoria->update();
        return redirect('/categorias');
    }

    public function destroy($id)
    {
        $categoria= Categoria::findOrFail($id);
        $categoria->delete();
        return redirect('/categorias');
    }
}
