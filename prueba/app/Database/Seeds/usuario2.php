<?php

namespace App\Database\Seeds;



class Usuario2 extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'usuario' => 'user1',
            'correo'    => 'user1@mail.com',
            'pass' => '1111',
            'tipo' => 'user'
        ];
    
        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}