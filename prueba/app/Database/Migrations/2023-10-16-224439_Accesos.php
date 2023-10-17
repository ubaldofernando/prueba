<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accesos extends Migration
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
            'fecha_hora' => [
                'tipe'  => 'DATETIME',
                'constraint' => '20',
            ],
            'ip' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',                
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('accesos');
    }

    public function down()
    {
        $this->forge->dropTable('accesos');
    }
    }
