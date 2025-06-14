<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInicioSesion extends Migration
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
            'correo_electronico' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,      
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
        $this->forge->createTable('inicio_sesion');
    }

    public function down()
    {
        //
    }
}
