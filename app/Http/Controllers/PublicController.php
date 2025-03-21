<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function inicio(){
        return view('public.inicio');
    }

    public function contacto(){
        return view('public.contacto');
    }

    public function servicios(){
        return view('public.servicios');
    }

    public function recursos(){
        return view('public.recursos');
    }

    public function faq(){
        return view('public.faq');
    }

    public function nosotros(){
        return view('public.nosotros');
    }
}
