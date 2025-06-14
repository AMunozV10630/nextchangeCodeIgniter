<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistro extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
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
                'constraint' => '100',
                'unique' => true,      
            ],
            'direccion' => [
                'type' => 'VARCHAR',
                'constraint' => '255', 
                'null' => true,
            ],
            'telefono' => [
                'type' => 'VARCHAR', 
                'constraint' => '20', 
            ],
            'contrasena' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'acepta_terminos' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'created_at' => [ 
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [ 
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('registro');
    }

    public function down()
    {
       //
    }
}