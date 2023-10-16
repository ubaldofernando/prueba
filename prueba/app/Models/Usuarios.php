<?php namespace App\Models;
    use CodeIgniter\Model;

    class Usuarios extends Model {

        public function obtenerUsuario($data) {
            
            $Usuario = $this->db->table('usuarios');
            $Usuario->where($data);
            return $Usuario->get()->getResultArray();
        }

        public function listarUsers() {
            $Users = $this->db->query("SELECT * FROM usuarios");
            return $Users->getResult();

        }
    }
