<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadre;
use App\User;
class CadreController extends Controller
{
    //
    public function index(){
        return User::with("roles","specialite","etablissement","grades","cadres")->get();
    }
}
