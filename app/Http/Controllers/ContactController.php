<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    //methode permettant d'afficher la la page contact
    public function create()
        {
            return view('mes_pages.contacts.create');
        }
}
