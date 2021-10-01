<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(){
        $organizations = Organization::orderBy('name','asc')->get();

        
        return view('index',compact('organizations'));
    }
}
