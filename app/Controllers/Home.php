<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function verMenuAdmin(){
        return view('menu_admin');
    }
    public function verMenuSecre(){
        return view('menu_secre');
    }
    public function verMenuVentas(){
        return view('menu_ventas');
    }
}
