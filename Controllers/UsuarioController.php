<?php
    // echo "Llegaste hasta aca";
    include_once '../Models/Usuario.php';
    // include_once '../Models/Historial.php';
    include_once '../Util/Config/config.php';
    $usuario = new Usuario();
    // $historial = new Historial();
    session_start();

    if($_POST['funcion'] == 'login'){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $usuario->verificar_usuario($user);
        $mensaje = '';
        if($usuario->objetos!=null){
            // Desencripto la contraseña asi puedo hacer el if 
            $pass_bd = openssl_decrypt($usuario->objetos[0]->pass, CODE, KEY);
            if($pass_bd == $pass){ 
                $_SESSION['id']=$usuario->objetos[0]->id;
                $_SESSION['user']=$usuario->objetos[0]->user;
                $_SESSION['tipo_usuario']=$usuario->objetos[0]->id_tipo;
                $_SESSION['avatar']=$usuario->objetos[0]->avatar;
                $_SESSION['nombre']=$usuario->objetos[0]->nombres.' '.$usuario->objetos[0]->apellidos;

                $mensaje = 'logueado'; // respuesta para el archivo JS
            } else {
                $mensaje = 'error';
            }
        } else {
            $mensaje = 'error'; // respuesta para el archivo JS
        }
        $json = array(
            'mensaje'=>$mensaje
        );
        $jsonstring= json_encode($json);
        echo $jsonstring;
    }

    if($_POST['funcion'] == 'verificar_sesion'){
        if(!empty($_SESSION['id'])) {
            $json[]=array(
                'id'=>$_SESSION['id'],
                'user'=>$_SESSION['user'],
                'tipo_usuario'=>$_SESSION['tipo_usuario']
            );
            $jsonstring = json_encode($json[0]);
            echo $jsonstring; 
        } else {
            echo '';
        }
    }

    if($_POST['funcion'] == 'verificar_usuario'){
        $username = $_POST['value'];
        $usuario->verificar_usuario($username);
        if($usuario->objetos!=null){
            echo 'success';
        }
    }   

    /*
    if($_POST['funcion'] == 'registrar_usuario'){
        $username = $_POST['username'];
        // Incriptamos la clave para que en la base de datos no se pueda ver
        $pass = openssl_encrypt($_POST['pass'],CODE,KEY);
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $dni = $_POST['dni'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $usuario->registrar_usuario($username,$pass,$nombres,$apellidos,$dni,$email,$telefono);
        $json = array(
            'mensaje'=>'success'
        );
        $jsonstring= json_encode($json);
        echo $jsonstring;
    } 
    */
?>
