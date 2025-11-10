<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index()
    {
        $email = $this->request->getPost('txt_usuario');
        $contra = $this->request->getPost('txt_contra');

        $usuarios = new UsuariosModel();

        $datos = $usuarios->select('nombre,tipo_usuario_id')
        ->where('email',$email)
        ->where('password',$contra)
        ->first();

        
        if ($datos) {
            #array con los datos del usuario
            $sesion=[
                'nombre'=>$datos['nombre'],
                'tipo'=>$datos['tipo_usuario_id'],
                'activa'=>true #bandera para ver si podemos acceder o no a las demas páginas
            ];

            #crear variables de sesion para acceder a ellos desde cualquier página
            session()->set($sesion);

            #print_r($datos);
            #echo("<br>". "Nombre: ". $datos['nombre']. "<br>");
            #echo("Tipo: ". $datos['tipo_usuario_id']. "<br>");
            if ($datos['tipo_usuario_id']==1) {
                return view('menu_admin');
            } elseif ($datos['tipo_usuario_id']==2) {
                return view('menu_ventas');
            } elseif ($datos['tipo_usuario_id']==3) {
                return view('menu_secre');
            } else {
                echo ("Tipo de dato desconocido");
            }
            
        } else {
            echo "datos incorrectos";
            return redirect()->to(base_url(''));
        }
        
        
        
        #return view('login');
    }

    public function cerrarSesion(){
        session()->destroy();
        return redirect()->to(base_url(''));
    }
}
