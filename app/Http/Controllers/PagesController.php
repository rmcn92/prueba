<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

	public function __construct()
	{
		$this->middleware('example', ['except' => ['home']]);
	}
	
	public function home()
	{
		return view('home');
		//return response('Contenido de la respuesta', 201)->header('X-TOKEN', 'secret');
	}

	public function saludo($nombre = 'Invitado')
	{
	$html = "<h2>Contenido html</h2>";

    $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>";

    $consolas = [
    //	"Ps4",
    	"XboxOne",
    	"WiiU"
    ];

    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
	}

}
