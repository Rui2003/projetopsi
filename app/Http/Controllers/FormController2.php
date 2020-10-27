<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function mostrarForm(){
    	return view('contactos');
    }
public function processarForm(Request $Request)
{
	$nome = $Request->nome;
	$morada= $Request->morada;
	$automovel=$Request->automovel;

	return view('form-enviado', [
		'nome'=>$nome,
		'morada'=>$morada,
		'automovel'=>$automovel
	]);
	}
	public function index(){
	return view('entrada');
}	





