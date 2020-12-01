<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function misionvision()
    {
        return view('institucion/admin/mision_vision');
    }
    public function autoridadesMunicipales()
    {
        return view('institucion/admin/autoridadesMunicipales');
    }
    public function historiaWeb()
    {
        return view('institucion/web/historia');
    }
    public function autoridadesWeb()
    {
        return view('institucion/web/autoridades');
    }
    public function contactosWeb()
    {
        return view('institucion/web/contactos');
    }
}
