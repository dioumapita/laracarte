<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    //methode permettant d'afficher la page d'acceuil
    public function home()
    {
        return view('welcome');
    }
    //methode permettant d'afficher la page about
    public function about()
    {
        return view('mes_pages.about');
    }
  
}
