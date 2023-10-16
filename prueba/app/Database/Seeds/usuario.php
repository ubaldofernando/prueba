<?php

namespace App\Database\Seeds;

class Usuario extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'usuario' => 'admin123',
            'correo'    => 'admin123@mail.com',
            'pass' => '1234',
            'tipo' => 'administrador'
        ];

        // Simple Queries
       // $this->db->query('INSERT INTO usuarios (usuario, correo, pass, tipo) VALUES(:usuario:, :correo:, :pass:, :tipo:)', $data);

        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}