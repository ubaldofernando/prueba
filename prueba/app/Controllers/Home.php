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
   //     if ((count($datosUsuario) > 0) && password_verify($password, $datosUsuario[0]['pass']) ) {
    //estoy utilizando mal password_verify requiere del hash y no lo utilicé para la contraseña en el seeder
    
    if ((count($datosUsuario) > 0) && ($password == $datosUsuario[0]['pass']) )  {   
        $data=[
                "usuario" => $datosUsuario[0]['usuario'],
                "tipo" => $datosUsuario[0]['tipo']
            ];
            $session= session();
            $session->set($data);
            return redirect()->to(base_url('/inicio')); 
        } else {
            return redirect()->to(base_url('/'));
        }
    }


    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    

    public function crear() {      
        $datos = [
            "usuario" => $_POST['usuario'],
            "correo" => $_POST['correo'],
            "pass" => $_POST['password'],
            "tipo" => $_POST['rol']
        ];
        $User = new Usuarios();
        $respuesta = $User->insertar($datos);

        if ($respuesta >0) {
            return redirect()->to(base_url().'/inicio')->with('mensaje','1');
        } else {
            return redirect()->to(base_url().'/inicio')->with('mensaje','0');
        }
        
    }

    public function actualizar() {
        $datos = [
            "usuario" => $_POST['usuario'],
            "correo" => $_POST['correo'],
            "pass" => $_POST['password'],
            "tipo" => $_POST['rol']
        ];
        $iduser= $_POST['iduser'];
        $Usuario = new Usuarios();

        $respuesta = $Usuario->actualizar($datos,$iduser);
       
        return redirect()->to(base_url('/inicio'));
    }

    public function obtenerUser($iduser) {
        $data = ["id" => $iduser];
        $User = new Usuarios();
        $respuesta = $User->obtenerUser($data);

        $datos=["datos"=> $respuesta];
       
        return view('actualizar',$datos);
    }

    public function eliminar($data) {
        $User = new Usuarios();
        $data = ["id" => $data];

        $respuesta = $User->eliminar($data);
       
        return redirect()->to(base_url('/inicio'));
    }

    public function accesos() {
        $Home = new Usuarios();
        $datos = $Home->listarUsers();

        return view('accesos', ['datos' => $datos]);
    }

    public function registro() {  
        
        $pass1 = $_POST['password'];
        $pass2 = $_POST['passwordr'];
        $rol = 'user';

        if($pass1 == $pass2) {
        $datos = [
            "usuario" => $_POST['usuario'],
            "correo" => $_POST['correo'],
            "pass" => $_POST['password'],
            "tipo" => $rol
        ];
        $User = new Usuarios();
        $respuesta = $User->insertar($datos);

        if ($respuesta >0) {
            return redirect()->to(base_url('/'))->with('mensaje','1');
        } else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
        
    }else {
        return redirect()->to(base_url().'/registro')->with('mensaje','2');
    }

    }

    public function registro1() {

        return view('registro');
    }
}
