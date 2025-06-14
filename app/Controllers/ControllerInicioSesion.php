<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\InicioSesion;
use App\Models\Registro;

class ControllerInicioSesion extends BaseController
{
    public function index()
    {
        return view('inicio_sesion_view');
    }

    public function procesarInicioSesion()
    {
        $registroModel = new Registro();
        $inicioSesionModel = new InicioSesion();

        $rules = [
            'correo' => 'required|valid_email',
            'contraseña' => 'required',
        ];

        // Mensajes de error personalizados
        $messages = [
            'correo' => [
                'required' => 'El campo Correo electrónico es obligatorio.',
                'valid_email' => 'Por favor, introduce un correo electrónico válido.',
            ],
            'contraseña' => [
                'required' => 'El campo Contraseña es obligatorio.',
            ],
        ];

        // Si la validación falla (campos vacíos o correo inválido), redirige de nuevo con los errores
        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Obtener datos del formulario
        $correo = $this->request->getPost('correo');
        $contrasena = $this->request->getPost('contraseña');

        // Buscar el usuario por correo electrónico en la tabla de registro
        $user = $registroModel->where('correo_electronico', $correo)->first();

        if ($user) {
            // Si el usuario existe, verificar la contraseña
            if (password_verify($contrasena, $user['contrasena'])) {
                // Contraseña correcta: Iniciar sesión del usuario
                $session = session();
                $session->set([
                    'id_usuario' => $user['id_usuario'],
                    'correo_electronico' => $user['correo_electronico'],
                    'isLoggedIn' => true,
                ]);

                //Guardar datos en la tabla inicio_sesion
                $dataSesion = [
                    'correo_electronico' => $correo,
                ];

                try {
                    $inicioSesionModel->insert($dataSesion);
                } catch (\Exception $e) {
                    log_message('error', 'Error al guardar el registro de inicio de sesión: ' . $e->getMessage());
                }

                // Redirige al usuario
                return redirect()->to(base_url('/inicioSesion?status=success'));

            } else {
                // Contraseña incorrecta
                return redirect()->back()->withInput()->with('error', 'Contraseña incorrecta.');
            }
        } else {
            // Usuario no encontrado (correo electrónico no registrado)
            return redirect()->back()->withInput()->with('error', 'Correo electrónico no registrado.');
        }
    }
}