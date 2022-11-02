<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalCOntroller extends Controller
{
    public function principal(){

        return view('site.principal');

    }
}
