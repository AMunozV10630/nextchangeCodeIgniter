<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Registro;

class ControllerRegistro extends BaseController
{
    public function index()
    {
        return view('registro_view');
    }

    public function procesarRegistro()
    {
        $registroModel = new Registro();

        // Validar los datos del formulario
        $rules = [
            'nombres' => 'required|min_length[3]|max_length[255]',
            'apellidos' => 'required|min_length[3]|max_length[255]',
            'correo' => 'required|valid_email|is_unique[registro.correo_electronico]',
            'direccion' => 'required|min_length[5]|max_length[255]',
            'telefono' => 'required|min_length[7]|max_length[20]',
            'contraseña' => 'required|min_length[8]',
            'terminos' => 'required',
        ];

        // Mensajes de error personalizados
        $messages = [
            'nombres' => [
                'required' => 'El campo Nombres es obligatorio.',
                'min_length' => 'El nombre debe tener al menos 3 caracteres.',
                'max_length' => 'El nombre no puede exceder los 255 caracteres.',
            ],
            'apellidos' => [
                'required' => 'El campo Apellidos es obligatorio.',
                'min_length' => 'El apellido debe tener al menos 3 caracteres.',
                'max_length' => 'El apellido no puede exceder los 255 caracteres.',
            ],
            'correo' => [
                'required' => 'El campo Correo electrónico es obligatorio.',
                'valid_email' => 'Por favor, introduce un correo electrónico válido.',
                'is_unique' => 'Este correo electrónico ya está registrado.',
            ],
            'direccion' => [
                'required' => 'El campo Dirección es obligatorio.',
                'min_length' => 'La dirección debe tener al menos 5 caracteres.',
                'max_length' => 'La dirección no puede exceder los 255 caracteres.',
            ],
            'telefono' => [
                'required' => 'El campo Teléfono es obligatorio.',
                'min_length' => 'El teléfono debe tener al menos 7 dígitos.',
                'max_length' => 'El teléfono no puede exceder los 20 dígitos.',
            ],
            'contraseña' => [
                'required' => 'El campo Contraseña es obligatorio.',
                'min_length' => 'La contraseña debe tener al menos 8 caracteres.',
            ],
            'terminos' => [
                'required' => 'Debes aceptar los términos y condiciones para registrarte.',
            ],
        ];

        // Si la validación falla, redirige de nuevo al formulario con los errores
        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Si la validación es exitosa, recopila los datos
        $data = [
            'nombres' => $this->request->getPost('nombres'),
            'apellidos' => $this->request->getPost('apellidos'),
            'correo_electronico' => $this->request->getPost('correo'),
            'direccion' => $this->request->getPost('direccion'),
            'telefono' => $this->request->getPost('telefono'),
            'contrasena' => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT),
            'acepta_terminos' => $this->request->getPost('terminos') ? 1 : 0,
        ];

        // Guardar los datos usando el modelo
        if ($registroModel->insert($data)) {
            // Registro exitoso, redirige con un mensaje de éxito
            return redirect()->to(base_url('/registro?status=success')); // Redirige a la URL base de registro
        } else {
            // Error al guardar (puede ser un problema de base de datos)
            return redirect()->back()->withInput()->with('error', 'Hubo un error al intentar registrar el usuario. Por favor, inténtalo de nuevo.');
        }
    }
}
