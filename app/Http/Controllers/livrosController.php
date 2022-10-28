<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Support\Facades\Redirect;

class livrosController extends Controller
{
    public function MostrarLivros(){
        return view('cadastro');
    }

    public function BDlivros(Request $request){
        $livros = new Livros;
        $livros -> nome = $request -> nome;
        $livros -> autor = $request -> autor;
        $livros -> paginas = $request -> paginas;
        $livros -> edicao = $request -> edicao;
        $livros -> valor = $request -> valor;
        $livros -> editora = $request -> editora;
        $livros -> categoria = $request -> categoria;
        $user = auth() ->user();
        $livros -> user_id = $user-> id;
    
    
        //image

if ($request -> hasfile('image') && $request-> file('image')-> isValid()){

    $requestImage = $request->image;

    $extension = $requestImage-> extension();

    $imageName = md5($requestImage ->getClientOriginalName() . strtotime ("now") . "." . $extension);

    $request-> image->move(public_path('images/livros'), $imageName);

    $livros -> image = $imageName;

}


        $livros -> save();
        return Redirect::route('register');

    }





    ////// FAVORITOS


    public function BDfavoritos(Request $request){
        $favoritos = new Favoritos;
        $favoritos -> nome = $request -> nome;
        $favoritos -> autor = $request -> autor;
        $favoritos -> paginas = $request -> paginas;
        $favoritos -> edicao = $request -> edicao;
        $favoritos -> valor = $request -> valor;
        $favoritos -> editora = $request -> editora;
        $favoritos -> categoria = $request -> categoria;
        $user = auth() ->user();
        $favoritos -> user_id = $user-> id;
    
    
        //image

if ($request -> hasfile('image') && $request-> file('image')-> isValid()){

    $requestImage = $request->image;

    $extension = $requestImage-> extension();

    $imageName = md5($requestImage ->getClientOriginalName() . strtotime ("now") . "." . $extension);

    $request-> image->move(public_path('images/livros'), $imageName);

    $favoritos -> image = $imageName;

}


        $favoritos -> save();
        return Redirect::route('register');

    }


}
