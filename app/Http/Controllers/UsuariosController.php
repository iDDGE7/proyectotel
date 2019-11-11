<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{

    public function signIn(){
        //   $user = DB::table('') 
        return view('signin'); 
    }

    public function getUsers(){
         $users = DB::table('usuario')->get();
         return $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usuarios = usuarios::paginate(15);
        return view('usuarios')->with(['Usuarios'=>$Usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoUsuario = DB::table('tipoUsuario')->get();
        return view('create.usuario')->with(['tipoUsuario'=>$tipoUsuario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'direccion'=>'required|string',
            'correo'=>'required|string',
            'numCuenta'=>'required|string',
            'contraseña'=>'required|string'
        ]);

        if (!$validator->fails()) {
            $Usuario = new usuarios();
            $Usuario->nombre = $request->nombre;
            $Usuario->apellido = $request->apellido;
            $Usuario->direccion = $request->direccion;
            $Usuario->correo = $request->correo;
            $Usuario->numCuenta = $request->numCuenta;
            $Usuario->contraseña = $request->contraseña;
            $Usuario->save();
            return redirect('/signin');
        }
     else{
        dd($validator);
         return redirect('/index')
             ->withErrors($validator)
             ->withInput();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
