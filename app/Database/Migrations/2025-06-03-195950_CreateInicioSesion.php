<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInicioSesion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'correo_electronico' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'contraseña' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE
            CURRENT_TIMESTAMP',
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('inicio_sesion');
    }

    public function down()
    {
        //
    }
}
