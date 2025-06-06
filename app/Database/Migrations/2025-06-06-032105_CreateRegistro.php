<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistro extends Migration
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
            'nombres' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'correo_electronico' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'direccion' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'telefono' => [
                'type' => 'INT',
                'constraint' => '50',
            ],
            'contraseña' => [
                'type' => 'VARCHAR',
                'constraint' => '8',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE
            CURRENT_TIMESTAMP',
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('registro');
    }

    public function down()
    {
        //
    }
}
