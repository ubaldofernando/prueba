<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosRoles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
            ],
            'rol_id' => [
                'type'           => 'INT',
                'constraint'     => 10,              
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios_roles');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios_roles');
    
    }

    
}
