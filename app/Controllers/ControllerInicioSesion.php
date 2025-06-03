<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\InicioSesion;

class ControllerInicioSesion extends BaseController
{
    public function index()
    {
        $inicioSesion = new InicioSesion();
        $data['inicio_sesion'] = $inicioSesion->findAll();
        return view('inicio_sesion_view', $data);
    }
}
