<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(){
        //dd("hola");
        $organizations = Organization::orderBy('nombre','asc')->get();

        return view('index',compact('organizations'));
    }

    public function update(Request $request){

        
        $organizacion = Organization::findOrFail($request->id);

        $organizacion->nombre = $request->nombre;
        $organizacion->siglas = $request->siglas;
        $organizacion->ano_creacion = $request->ano;
        $organizacion->direccion = $request->direccion;
        $organizacion->telefonos = $request->telefonos;
        $organizacion->mision = $request->mision;
        $organizacion->vision = $request->vision;
        $organizacion->pagina_web = $request->pagina_web;
        $organizacion->nombre_persona = $request->nombre_persona;
        $organizacion->telefono_persona = $request->telefono_persona;
        $organizacion->email_persona = $request->email_persona;
        $organizacion->twitter = $request->twitter;
        $organizacion->facebook = $request->facebook;
        $organizacion->instagram = $request->instagram;

        $organizacion->save();

        return redirect('/')->withSuccess('Actualizacion Exitosa!');
        
    }
}
