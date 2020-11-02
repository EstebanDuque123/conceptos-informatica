<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'"><h2>Iniciar sesión con Google</h2></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Conceptos Básicos de Informatica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <style>
table,td {
  border: 1px solid black;
}
</style>
 </head>
 <body class="is-preload">

<!-- Header -->
      <header id="header">
        <a class="logo" href="index.php">Conceptos Básicos de Informatica</a>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header> 

      <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="libros.html">Libros</a></li>
          <li><a href="actividades.html">Actividades de Aprendizaje</a>
          <li><a href="quizes.html">Quizes</a></li>
        </ul>
      </nav>

    <!-- Banner -->
      <section id="banner">
        <div class="inner">
          <h1>Conceptos Básicos de Informatica</h1>
          <p>Descripcion<br /></p>
        </div>
        <video autoplay loop muted playsinline src="banner.mp4"></video>
      </section>
  

        <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  <div class="container">

   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {

    if($_SESSION['user_email_address'] == 'dsfsdghdfdgh@gmail.com' )
      {
    echo '<div class="panel-heading">Bienvenido Profesor</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Nombre :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Correo :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<div><h3><a href="logout.php">Cerrar sesión</a></h3></div>';
    echo '<div><h6><a href="index.php">Refrescar Datos</a></h6></div>';

  $servidor="localhost";
  $usuario="root";
  $clave="";
  $basedatos="score";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);

echo '<table class="egt">
        
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Correo</td>
            <td>Quiz</td>
            <td>Puntuación</td>
        </tr>


        </table>';
$consulta = "SELECT * From puntos";
$ejecutarconsulta = mysqli_query($enlace, $consulta);
$verfilas = mysqli_num_rows($ejecutarconsulta);
$filas = mysqli_fetch_array($ejecutarconsulta);

  if(!$ejecutarconsulta)
  {
    echo"error en la cosulta";
  }else{
    if($verfilas<1){
      echo"<tr><td>Sin Registros</tr></td>";
    }else{
      for($i=0; $i<=$filas; $i++){
        echo'
              <tr>
                  <td>|'.$filas[0].'|</td>
                  <td>|'.$filas[1].'|</td>
                  <td>|'.$filas[2].'|</td>
                  <td>|'.$filas[3].'|</td>
                  <td>|'.$filas[4].'|</td>
              </tr>
              <br>
        ';$filas = mysqli_fetch_array($ejecutarconsulta);
      }
    }
  }

      }
    else 
    {
    $Nombre= $_SESSION["user_first_name"];
    $ape = $_SESSION['user_last_name'];
    $correo = $_SESSION['user_email_address'];

    

    echo '<div class="panel-heading">Bienvenido Estudiante</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Nombre :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Correo :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<div><h3><a href="logout.php">Cerrar sesión</a></h3></div>';    
    echo ''; 
    echo '<div>

<table class="egt">
  <tr>

    <td> <h3>Libros</3> </td>

    <td> <h3>Actividades de aprendizaje </h3 </td>

    <td> <h3>Quiz </3></td>

  </tr>

  <tr>

    <td><div><a href="Definiciones.html">Libro Definiciones</a></div></td>

    <td> <div><a href="Que_es_Hardware.htm">Que es Hardware?</a></div> <br> <div><a href="Que_es_informatica.htm">Que es informatica?</a></div> <br> <div><a href=" Que_es_periferico.htm">Que es iun periferico?</a></div></td>

    <td><a href="Hardware.php">Quiz Definiciones</a> </td>

  </tr>

  <tr>

    <td><div><a href="Dispositivos de entrada y salida libro.html">Libro Dispositivos entrada y salida</a></div></td>

    <td><div><a href="Crucigrama_dispositivos_entrda_y_salida.htm">Cruciframa dispositivos entrada y salida</a></div> <br> <div><a href="rellenar_palabras.htm">Rellenar palabras dispositivos entrada y salida</a></div> <br> <div><a href=" Unir.htm">Emparejar dispositivos entrada y salida</a></div></td>

    <td><div><a href="V_o_F_Dispositivos.php">Verdadero o falso</a></div> <br> <a href="Quiz_Dispositivos_entrada_y_salida.php">Quiz Dispositivos entrada y salida </a>  </td>

  </tr>

  <tr>

    <td><div><a href="Parte interna del CPU.html">Libro Parte interna del PC</a></div></td>

    <td> <a href="Crucigrama_parte_interma.htm">Crucigrama parte interna del pc</a></div></td>

    <td><div><a href="Quiz_Partes_del_Computador.php">Quiz Partes del PC</a></div> <br> <div><a href="V_o_F_partes ">Verdadero o falso Partes del PC</a></div></td>
  </tr>

  <tr>

    <td><div><a href="Tarjetas PCI.html">Libro Tarjetas PCI</a></div></td>

    <td> <a href="Unir_tarjetas.htm">Emparejar Tarjetas</a> </td>

    <td><div><a href="Ranuras_tarjetas.php">Quiz Tarjetas PCI</a></div> </td>

  </tr>

  <tr>

    <td><div><a href="Libro Software.html">Libro Software</a></div></td>
  

    <td><div><a href="crucigrama.htm">Crucigrama</a></div><br><div><a href="Completar.htm">Completar la frase</a></div><br><div><a href="Organizar_oración.htm">Organiza la Oración</a></div><br>
        <div><a href="Organizar-qesinternet.htm">Que es internet?</a></div><br>
        <div><a href="relacion-col-tiposdatos.htm">Relaciona los tipos de datos</a></div><br>
        <div><a href="relacion-columnas.htm">Relaciona las columnas</a></div><br>
        <div><a href="relacion-colum-navegador.htm">Relaciona las columnas navegador</a></div><br>
        <div><a href="relacion-tipos-so.htm">Relaciona las columnas Sistemas Operativos</a></div><br>
    </td>
  
    <td>
    <div><a href="quiz-antivirus.php">Quiz Antiviruz</a></div><br>
    <div><a href="quiz-bit.php">Quiz bit</a></div><br>
    <div><a href="quiz-concep-programa.php">Quiz conceptos de programación</a></div><br>
    <div><a href="Quiz-conceptos.php">Quiz conceptos </a></div><br>
    <div><a href="quiz-conc-red.php">Quiz conceptos de red</a></div><br>
    <div><a href="quiz-informacion.php">Quiz informacion</a></div><br>
    <div><a href="quiz-softwareuso.php">Quiz software</a></div><br>
    </td>

  </tr>


</table></div>';
}

   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }

   ?>
   </div>

  </div>
 <a href="archivo.php?$nom=$nom&$ape=$ape&$correo=$correo"></a>
 </body>

</html>
 