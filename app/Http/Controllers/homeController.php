<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Support\Facades\Redirect;

class homeController extends Controller
{
    public function mostrarHome(){
        
$livros= Livros::all();


     
        return view ('home', ['livros' => $livros]);



    }




}
