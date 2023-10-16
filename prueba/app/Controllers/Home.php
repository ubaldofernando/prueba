<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index() {

        
        //
        $mensaje = session('mensaje');
        return view('login', ["mensaje"=> $mensaje]);
    }

    public function inicio() {
        $Home = new Usuarios();
        $datos = $Home->listarUsers();

        return view('inicio', ['datos' => $datos]);
    }

    public function login() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        if ((count($datosUsuario) > 0) && password_verify($password, $datosUsuario[0]['pass']) ) {
            $data=[
                "usuario" => $datosUsuario[0]['usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];
            $session= session();
            $session->set($data);
            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
 
        } else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }


    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function registar() {
        return redirect()->to(base_url('/registrar'));
    }

    public function crear() {
        print_r($_POST);
        
    
    }

    public function actualizar() {
       
        return redirect()->to(base_url('/'));
    }

    public function obtenerUser($iduser) {
       
        return redirect()->to(base_url('/'));
    }

    public function eliminar($iduser) {
       
        return redirect()->to(base_url('/'));
    }
}
