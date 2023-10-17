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

        public function insertar($datos) {
            $Users = $this->db->table('usuarios');
            $Users->insert($datos);
            return $this->db->insertID();
        }

        public function obtenerUser($data) {
            $user = $this->db->table('usuarios');
            $user->where($data);
            return $user->get()->getResultArray();
        }

        public function actualizar($data,$iduser) {
            $user = $this->db->table('usuarios');
            $user->set($data);
            $user->where('id',$iduser);
            return $user->update();
        }

        public function eliminar($data) {
            $user = $this->db->table('usuarios');
            $user->where($data);
            return $user->delete();
        }

        public function accesos() {
            $query = $this->db->table('usuarios');
            $query->select('usuarios.id, usuarios.usuario, accesos.ip');
            $query->join('accesos', 'usuarios.id = accesos.user_id');
            return $query->get()->getResult();
    }
 }
