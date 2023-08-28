<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Premium Air</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- custom css file link  -->
  <!--
  <link rel="stylesheet" href="/Premium-Air/Util/Css/style.css">
  <link rel="stylesheet" href="/Premium-Air/Util/Css/style.scss">
  -->
  <link rel="icon" type="image/x-icon" href="/Premium-Air/Util/images/favicon.ico">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Premium-Air/Util/Css/css/all.min.css">

  <!-- icheck bootstrap -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/Premium-Air/Util/Css/toastr.min.css">
  <link rel="stylesheet" href="/Premium-Air/Util/Css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<style>
  .login-page{
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/Premium-Air/Util/images/home-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
  }

  .login-box{
    width: 40%;
  }

  .login-form {
    z-index: 1100;
    height: 100%;
    width: 100%;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    padding: 2rem;
  }
  /*
  .login-form.active {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  */

  .login-form form {
    padding: 4rem;
    background: #fff;
    text-align: center;
    position: relative;
    -webkit-animation: fadeIn .2s linear;
            animation: fadeIn .2s linear;
  }

  .login-form form #close-login-form:hover {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }

  .login-form form .logo {
    font-size: 2.5rem;
    color: #5888a4;
    font-weight: bolder;
  }

  .login-form form h3 {
    padding: 1rem 0;
    font-size: 2rem;
    text-transform: capitalize;
    color: #222;
    margin-top: 1rem;
  }

  .login-form form .box {
    width: 100%;
    padding: 1.2rem 1.4rem;
    border: 0.1rem solid #5888a4;
    font-size: 1.6rem;
    margin: 1rem 0;
  }

  .login-form form .flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    gap: .5rem;
    margin: 1rem 0;
  }

  .login-form form .flex label {
    font-size: 1.5rem;
    line-height: 2;
    color: #666;
    margin-bottom: 0;
    cursor: pointer;
  }

  .login-form form .flex a {
    font-size: 1.5rem;
    color: #5888a4;
    margin-left: auto;
  }

  .login-form form .flex a:hover {
    text-decoration: underline !important;
  }

  .login-form form .link-btn {
    width: 100%;
    margin-bottom: 2rem;
  }

  .login-form form .account {
    padding: 1.5rem .5rem;
    background: #eee;
    font-size: 1.5rem;
    line-height: 2;
    color: #666;
    margin-bottom: 0;
  }

  .login-form form .account a {
    color: #5888a4;
  }

  .login-form form .account a:hover {
    text-decoration: underline !important;
  }
</style>
<div class="login-box ">
  <!--
  <div class="login-logo">
    <img src="/Premium-Air/Util/images/favicon.ico" class="profile-user-img img-fluid img-circle">
    <a href="/Premium-Air/index.php"><b>Premium</b>AIR</a>
  </div>
-->

  <div class="login-form">
   <form id="form-login" action="">
      <!-- Logo -->
      <a href="/Premium-Air/index.php" class="logo mr-auto"><i class="fas fa-cloud"></i> <b>Premium</b>AIR</a>
      <h3>let's start a new great day</h3>

      <!-- User -->
      <div class="input-group mb-3">
        <input id="user" type="text" name="" placeholder="Enter your user" id="" class="form-control" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>

      <!-- Password -->
      <div class="input-group mb-3">
        <input id="pass" type="password" placeholder="Enter your password" id="" class="form-control" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      
      <!-- Remember Me - Forgot Password -->
      <div class="flex">
         <input type="checkbox" id="remember">
         <label for="remember-me">Remember me</label>
         <a href="#">¿Forgot Password?</a>
      </div>
      
      <!-- Log In -->
      <!--<input type="submit" value="login now" class="link-btn">-->
      <button type="submit" href="#" class="btn btn-block btn-primary">
        Log In
      </button>
      <p class="account">Don't have an account? <a href="/Premium-Air/Views/register.php">Create one!</a></p>
   </form>
  </div>
</div>

<!-- jQuery -->
<script src="/Premium-Air/Util/Js/jquery.min.js"></script>
<script src="/Premium-Air/Util/Js/sweetalert2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/Premium-Air/Util/Js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/Premium-Air/Util/Js/adminlte.min.js"></script>

<script src="/Premium-Air/Util/Js/toastr.min.js"></script>
<!--
<script>
$(document).ready(function() {
    var funcion;
    verificar_sesion();
    Loader();
    // setTimeout(verificar_sesion, 2000);

    async function verificar_sesion() {
      funcion = "verificar_sesion";
      let data = await fetch('/Centennials/Controllers/UsuarioController.php', {
        method:'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'funcion=' + funcion
      });
      if(data.ok){
        let response = await data.text();
        try {
          if(response != ''){
            location.href = '/Centennials/index.php';
          } 
          CloseLoader();
        } catch(error) {
          console.error(error);
          console.log(response);
        }
      } else {
        Swal.fire({
          icon: 'error',
          title: data.statusText,
          text: 'Hubo conflicto de codigo: ' + data.status,
        });
      }
    }

    async function login(user, pass) {
      funcion = "login";
      let data = await fetch('/Centennials/Controllers/UsuarioController.php', {
        method:'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'funcion=' + funcion + '&&user=' + user + '&&pass=' + pass
      });
      if(data.ok){
        let response = await data.text();
        try {
            let respuesta =  JSON.parse(response);
             if(respuesta.mensaje == 'logueado'){
                toastr.success('* Logueado !!!');
                location.href = '/Centennials/index.php';
            } else if(respuesta.mensaje == 'error'){
                toastr.error('* Usuario o contraseña incorrectas!');
            }
          CloseLoader();
        } catch(error) {
          console.error(error);
          console.log(response);
        }
      } else {
        Swal.fire({
          icon: 'error',
          title: data.statusText,
          text: 'Hubo conflicto de codigo: ' + data.status,
        });
      }
    }

    $('#form-login').submit(e => {
        funcion = 'login';
        let user = $('#user').val();
        let pass = $('#pass').val();
        Loader('Iniciando Sesion...');
        // setTimeout(login(), 2000);
        login(user, pass);
        e.preventDefault();
    })   

    /*
    // Loader
    function Loader(mensaje){
      if(mensaje==''||mensaje==null){
        mensaje = 'Cargano datos...';
      }
      Swal.fire({
          position: 'center',
          html: '<i class="fas fa-2x fa-sync-alt fa-spin"></i>',
          title: mensaje,
          showConfirmButton: false
      });
    }
    // Close Loader
    function CloseLoader(mensaje, tipo){
      if(mensaje==''||mensaje==null){
        Swal.close();
      }
      else {
        Swal.fire({
            position: 'center',
            icon: tipo,
            title: mensaje,
            showConfirmButton: false
        });
      }
    } 
    */
})
</script>
-->
</body>
</html>