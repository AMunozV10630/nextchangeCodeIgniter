<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Registro;

class ControllerRegistro extends BaseController
{
    public function index()
    {
        $registro = new Registro();
        $data['registro'] = $registro->findAll();
        return view('registro_view', $data);
    }
}
