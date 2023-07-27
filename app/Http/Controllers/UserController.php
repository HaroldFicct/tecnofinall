<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    //se puede filtrar el inicio de sesion por aqui y por la ruta
    // ese usa midllerawe de la carpeta middleware y el archivo autenticate
    // que este esta difinido en el archivo kernel
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = trim($request->get('search'));

        if ($request){
            $users = User::where('name','LIKE','%' . $query . '%')
                ->orderBy('id','asc')
                ->get();
                return view('usuarios.index',['users'=>$users,'search'=>$query]);

        }
        //$users = User::all();
        //return view('usuarios.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('usuarios.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario= new User();
        $usuario->name=request('name');
        $usuario->email=request('email');
        $usuario->adress=request('address');
        $usuario->phone=request('phone');
        $usuario->password=bcrypt(request('password'));
        $usuario->save();

        $usuario->asignarROl($request->get('rol'));
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.show',['user'=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('usuarios.edit',['user'=>User::findOrFail($id)]);

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
        /// izquierda variable como la bd y la derecha como se manda en el request en name
        $usuario= User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->adress=$request->get('adresss');
        $usuario->update();
        return redirect('/usuarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
