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
}
