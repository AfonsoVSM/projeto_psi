<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
     public function noticiasForm(){
        return view('noticias');
    }
    public function welcomeForm(){
        return view('welcome');
    }

    public function contactosForm(){
    	return view('contactos');
    }
    public function empresaForm(){
        return view('empresa');
    }
    public function ondeestamosForm(){
        return view('ondeestamos');
    }

    public function processarForm(Request $request)
    {
    $nome=$request->nome;
    $morada=$request->morada;
    $telemovel=$request->telemovel;

    return view('form-enviado' ,[
    	'nome'=>$nome,
    	'morada'=>$morada,
    	'telemovel'=>$telemovel



    ]);
}
public function index(){
	return view('entrada');
}
}
 


?>
    