<?php session_start();
$cod_grupo = $_SESSION["cod_grupo"];
$usuario = $_SESSION["usuario"];
$mobil = $_SESSION["mobil"];
include('conexion/conn.php');
if($usuario){
            $sql="select cod_usu,nombre,cod_grupo from usu where usuario='$usuario'";
            $resp=mysql_query($sql);
            $arreglo=mysql_fetch_array($resp);
            $cod_usu=$arreglo["cod_usu"];
            $nombre_usuario=$arreglo["nombre"]; 
            $foto_usuario=$arreglo["foto"];

            
}



?>


<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Abogados en Línea | Te conectamos con cientos de abogados</title>
<meta name="description" content="Consulta con mas de 400 abogados en línea. Comparas las propuestas de varios abogados y contratas al abogado que mejor relación costo/beneficio te ofrezca."/>
<meta name="robots" content="NOODP"/>
<link rel="alternate" href="https://tusabogadosycontadores.co/abogadosenlinea.php" hreflang="es-co" />
<link rel="shortcut icon" href="https://tusabogadosycontadores.co/img/favicon.ico">

<meta property="og:locale"             content="es_ES"/>
<meta property="og:url"                content="http://tusabogadosycontadores.co/" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="Abogados en Línea | Te conectamos con cientos de abogados" />
<meta property="og:description"        content="¡TRABAJO SI HAY! ¿Eres Abogado y/o Contador? Ingresa a www.tusabogadosycontadores.co, la primera plataforma en línea en COLOMBIA, que conecta a profesionales especializados, con personas que necesitan de la asesoría de Abogados y/o Contadores." />
<meta property="og:image"              content="https://tusabogadosycontadores.co/img/TusAbogadosyContadores.jpg" />
<meta property="og:site_name"          content="Tus abogados y Contadores" />
<meta property="article:publisher"     content="https://www.facebook.com/tusabogadosycontadores/" />

<meta name="twitter:card"              content="summary" />
<meta name="twitter:description"       content="¿1. ¡Consulta gratis! 2. Obtienes propuestas de varios abogados en línea. 3.  Compara y seleccionas según el costo, experiencia, estudios, etc" />
<meta name="twitter:title"             content="Abogados en Línea | Te conectamos con cientos de abogados" />
<meta name="twitter:site"              content="@AbogadosyConta" />
<meta name="twitter:image"             content="https://tusabogadosycontadores.co/img/TusAbogadosyContadores.jpg" />
<meta name="twitter:creator"           content="@AbogadosyConta" />





        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="css/flexslider_consolidado.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <link rel="stylesheet" type="text/css" href="css/rev-style.css">
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/yamm.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
		
		-->
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
        <!--owl carousel css-->
        <!--mega menu -->
        <!--cube css-->
        <link href="cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
        <!-- custom css-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

 <!-- Google -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90407024-1', 'auto');
  ga('send', 'pageview');

</script>


    </head>
    <body>
    <h1 hidden>Abogados en Línea</h1>

        <div class="top-bar-dark">    
        <?php $sql="select correo,telefono,direccion,facebook,twiter,google,instagram,youtobe,picasso from parametros";
            $resp=mysql_query($sql);
            $arreglo=mysql_fetch_array($resp);
            $correo=$arreglo["correo"];
            $telefono=$arreglo["telefono"];
            $direccion=$arreglo["direccion"];
            $facebook=$arreglo["facebook"];
            $twiter=$arreglo["twiter"];
            $google=$arreglo["google"];
            $instagram=$arreglo["instagram"];
            $youtobe=$arreglo["youtobe"];
            $picasso=$arreglo["picasso"];?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <div class="top-bar-socials">
                            <a href="<?php echo $facebook?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="<?php echo $twiter?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="<?php echo $google?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <!--<a href="#" class="social-icon-sm si-dark si-gray-round si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>-->
                            <a href="<?php echo $youtobe?>" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-google-plus">
                                <i class="fa fa-youtube"></i>
                                <i class="fa fa-youtube"></i>
                            </a>
                            <!--<a href="#" class="social-icon-sm si-dark si-gray-round si-colored-dribbble">
                                <i class="fa fa-dribbble"></i>
                                <i class="fa fa-dribbble"></i>
                            </a>-->
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i><?php echo $correo?></li>
                            <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i><?php echo $telefono?></li>
                            <?php if($usuario){?>
                            <li><a href="#"><i class="fa fa-user"></i> <?php echo $usuario?></a></li>
                            <li><a href="salir2.php"><i class="fa fa-sign-out"></i> Salir</a></li>
                            <?php }else{?>
                            <li><a data-toggle="modal" data-target="#login" class="btn btn-theme-dark btn-sm"><i class="fa fa-user"></i> Accede</a>
                            </li>
                            <?php }?>
                            
                            
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                                <span class="search-close"><i class="fa fa-times"></i></span>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--top-bar-dark end here-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../"><img src="img/logo.png" alt="Tusabogadosycontadores.co"></a>
                </div>
                <?php if($mobil==1){?>
                <br><br><br>
                <?php }?>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li>
                <?php if(!$usuario){?>
                <div class="text-center">
                    <a href="registro/cotizacion.php" class="btn btn-success btn-sm">Pide una asesoría</a>
                    <a href="registro/profesional.php" class="btn btn-warning btn-sm">¿Eres un Abogado?</a>            
                </div>
                <?php }?>
                </li>
                        <!--menu home li end here-->
                        <?php if($cod_grupo=='1'){?>
                        <li class="dropdown">
                            <a href="usuarios.php">Administrar<i class="fa fa-angle-down"></i></a>
                        </li><?php }?>
                        <?php if($usuario){?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Mi Perfil <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li><a href="registro/perfil_cli.php">Como cliente</a></li>
                                <li><a href="registro/perfil.php">Como profesional</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Para Clientes <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li><a href="registro/cotizacion.php">Solicitar nueva asesoría</a></li>
                                <li><a href="procesos/profesionales.php">Directorio de profesionales</a></li>
                                <li><a href="registro/presupuestos_cli.php">Mis asesorías solicitadas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Para Profesionales <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <?php if($cod_grupo=='2'){// si es cliente?>
                                    <li><a href="registro/profesional.php" class="btn border-theme btn-sm">Registrarse como profesional.</a></li>           
                                <?php }?>
                                <li><a href="procesos/trabajos.php">Trabajos publicados </a></li>
                                <li><a href="registro/presupuestos_pro.php">Seguimiento de propuestas</a></li>
                                <li><a href="procesos/precios.php">Guia de precios</a></li>
                            </ul>
                        </li>
                        <?php }?>
                        <li class="dropdown">
                            <a href="procesos/profesionales.php">Directorio de profesionales <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="dropdown">
                               <a href="blog/blog.php">Blog</a></li>
                        </li>
                     </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

        <!--rev slider start-->
        <div class="fullwidthbanner">
            <div class="tp-banner">
                <ul>
                    <!-- <h1 hidden>Abogados en Línea</h1> 
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Tus Abogados y Contadores">
                        <!-- MAIN IMAGE -->
                        <img src="img/TusAbogadosyContadores.jpg" height="200%" alt="Tus Abogados y Contadores"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption title-2 sft"
                             data-x="50"
                             data-y="160"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutExpo">
		                     contrata tu abogado en línea<br>
                             y de manera inteligente
                        </div>
                        <div id="et1" class="caption text sfl"
                             data-x="50"
                             data-y="340"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            <h3 style="color:#FFFFFF">1. Presupuesta gratis con varios abogados en línea.<br>
                            2. Obtienes propuestas de varios abogados.<br>
                            3. Seleccionas según el costo, experiencia, estudios, etc</h3>
                        </div>
						<div style="display:none" id="boton1" class="caption title-2 sft"
                             data-x="50"
                             data-y="400"
                             data-speed="500"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            <a href="registro/cotizacion.php" class="btn btn-xs btn-success"> <h6 style="color:#FFFFFF"> Pide tu asesoría jurídica. <span class="glyphicon glyphicon-bullhorn"></h6> </a>
                        </div>
                        <div id="boton11" class="col-sm-5 caption sfb rev-buttons tp-resizeme"
                             data-x="50"
                             data-y="450"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="registro/cotizacion.php" class="btn btn-lg btn-success btn-block" role="button"> <h3 style="color:#FFFFFF"> Pide tu asesoría jurídica. <span class="glyphicon glyphicon-bullhorn"></h3> </a>
                        </div>
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Abogados en Línea">
                        <!-- MAIN IMAGE -->
                        <img src="img/Abogadoenlinea.jpg"  alt="Abogados en Línea"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption title-2 sft"
                             data-x="50"
                             data-y="160"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutExpo">
                             contrata tu abogado en línea<br>
                             y de manera inteligente
                        </div>
                        <div class="caption text sfl" id="et2"
                             data-x="50"
                             data-y="340"
                             data-speed="1000"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            <h3 style="color:#FFFFFF">1. Presupuesta gratis con varios abogados en línea.<br>
                            2. Obtienes propuestas de varios abogados.<br>
                            3. Seleccionas según el costo, experiencia, estudios, etc</h3>
                        </div>
                        <div style="display:none" id="boton2" class="caption title-2 sft"
                             data-x="50"
                             data-y="400"
                             data-speed="500"
                             data-start="1800"
                             data-easing="easeOutExpo">
                            <a href="registro/cotizacion.php" class="btn btn-xs btn-success"> <h6 style="color:#FFFFFF"> Pide tu asesoría jurídica. <span class="glyphicon glyphicon-bullhorn"></h6> </a>
                        </div>
                        <div id="boton22" class="col-sm-5 caption sfb rev-buttons tp-resizeme"
                             data-x="50"
                             data-y="450"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="registro/cotizacion.php" class="btn btn-lg btn-success btn-block" role="button"> <h3 style="color:#FFFFFF"> Pide tu asesoría jurídica. <span class="glyphicon glyphicon-bullhorn"></h3> </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!--full width banner-->
        <!--revolution end-->

<!--¿Por qué contratar a través de Tus Abogados y Contadores?-->
             <div class="container">   
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-heading">
                              <span class="center-line"></span>
                              <h2><strong>¿Por qué</strong> Tus Abogados y Contadores? </h2>
                              <span class="center-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                        <div class="services-box  margin60">
                            <div class="services-box-icon">
                                <i class="fa fa-users"></i>
                            </div><!--services icon-->
                                <div class="services-box-info">
                                    <p>Porqué NO somos una firma de abogados, ni una WEB que contrata su propio bufete de abogados en línea.</p>
                                    <br>
                                </div><!--service box-->
                        </div>

                        <div class="services-box margin60">
                            <div class="services-box-icon">
                                <i class="fa fa-usd"></i>
                            </div><!--services icon-->
                                <div class="services-box-info">
                                    <p>Esto te asegura que pagaras lo justo, al comparar propuestas de diferentes abogados en línea. ¡Oferta y Demanda!</p>
                                </br>
                                </div>
                        </div><!--service box-->
              
                        <div class="services-box margin60">
                            <div class="services-box-icon">
                                <i class="fa fa-balance-scale"></i>
                            </div><!--services icon-->
                                <div class="services-box-info">
                                    <p>Así garantizas seleccionar el abogado que mejor relación te ofrezca entre costos, ubicación, experiencia, estudios, etc…</p>

                                </div>
                        </div><!--service box-->
                </div>
            </div>
<!--Como funciona-->
        <div class="wide-img-showcase" id="funciona1">

                <div class="center-heading">
                            <span class="center-line"></span>
                            <h2><strong>¿Cómo contratar</strong> a través Tus Abogados y Contadores?</h2>
                            <span class="center-line"></span>
                        </div>
                <div class="row margin-0 wide-img-showcase-row">
                <div class="col-sm-6 no-padding  img-2 ">
                    <div class="no-padding-inner col-sm-12 ">
                    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9mP-fU-LcZk?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6 no-padding gray">
                    <div class="no-padding-inner gray">
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>1.  Haz tu solicitud.</h4>
                                <p>
                                    Y lo mejor <br>¡Es Gratis!
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-comments"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>2.  Compara múltiples propuestas.</h4>
                                <p>
                                    Comparas y seleccionas el abogado que mejor relación te de entre costo, estudios, y experiencia.
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>3.  Contratas al abogado especializado en tu solicitud.</h4>
                                <p>
                                    Estos simples pasos te permitirá obtener la mejor relación entre calidad y precio.
                                </p>
                            </div>
                        </div><!--service box-->

                    </div>
                </div>
            </div>
        <div class="divide40"></div>
            <div class="text-center">
            <a href="registro/cotizacion.php" class="btn btn-success btn-lg">Pide una Asesoría a nuestros abogados en línea</a>
            <a href="registro/profesional.php" class="btn btn-warning btn-lg">¿Eres un Abogado? - Regístrate aquí</a>
        <div class="divide40"></div>
        </div>
        </div>
        <div id="funciona11" style="display:none">

                <div class="center-heading">
                            <span class="center-line"></span>
                            <h2><strong>¿Cómo contratar</strong> a través Tus Abogados y Contadores?</h2>
                            <span class="center-line"></span>
                        </div>
                <div class="row">
                <div class="col-sm-6 no-padding">
                    <div class="no-padding-inner col-sm-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/9mP-fU-LcZk?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 gray">
                    <div class="gray">
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>1.  Haz tu solicitud.</h4>
                                <p>
                                    Y lo mejor ¡Es Gratis!
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-comments"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>2.  Compara múltiples propuestas.</h4>
                                <p>
                                    Comparas y seleccionas el abogado que mejor relación te de entre costo, estudios, y experiencia.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>3.  Contratas al abogado especializado en tu solicitud.</h4>
                                <p>
                                    Estos simples pasos te permitirá obtener la mejor relación entre calidad y precio.
                                </p>
                            </div>
                        </div><!--service box-->

                    </div>
                </div>
            </div>
        <div class="divide40"></div>
            <div class="text-center">
            <a href="registro/cotizacion.php" class="btn btn-success btn-lg">Pide una Asesoría <br>a nuestros abogados en línea</a><br><br>
            <a href="registro/profesional.php" class="btn btn-warning btn-lg">¿Eres un Abogado? - Regístrate aquí</a>
        <div class="divide40"></div>
        </div>
        </div>

        <!--servicios-->
    <div class="divide60"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">
                    <div class="center-heading">
                        <span class="center-line"></span>
                        <h2><strong>Asesorías frecuentes </strong>para nuestros abogados en línea</h2><br>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>
            <!--center heading end-->

            <div class="divide50"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6 margin30">
                <a href="abogadosdefamilia.php">
                    <div class="colored-boxed green">
                        <img src="img/DemandadeAlimentos.jpg"  alt="Abogados de Familia"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados de Familia</h3>
                        <p>Expertos en Asesorías para Conflictos Familiares</p>
                        <span class="center-line"></span>
                    </div></a>
                </div>
            <!--colored boxed col end-->
                
                <div class="col-md-4 col-sm-6 margin30">
                <a href="abogadoslaborales.php">
                    <div class="colored-boxed dark">
                         <img src="img/Despidos.jpg"  alt="Abogados Laborales"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados Laborales</h3>
                        <p>Expertos en Asesorías para Conflictos entre Trabajadores y Empleadores</p>
                        <span class="center-line"></span>
                    </div></a>
                </div>
            <!--colored boxed col end-->

                <div class="col-md-4 col-sm-6 margin30">
                <a href="abogadosciviles.php">
                    <div class="colored-boxed blue">
                        <img src="img/AbogadosCiviles.jpg"  alt="Abogados Civiles"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados Civiles</h3>
                        <p>Expertos en Asesorías para Conflictos entre Personas y/o Empresas</p>
                        <span class="center-line"></span>
                    </div></a>
                </div>
            <!--colored boxed col end-->

                <div class="col-md-4 col-sm-6 margin30">
                <a href="registro/cotizacion.php">
                    <div class="colored-boxed red">
                        <img src="img/Abogados en Linea.jpg"  alt="Abogados Administrativos"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados Administrativos</h3>
                        <p>Expertos en Asesorías para procesos ante el Estado</p>
                        <span class="center-line"></span>
                    </div></a>
                </div>
            <!--colored boxed col end-->

                <div class="col-md-4 col-sm-6 margin30">
                <a href="registro/cotizacion.php">
                    <div class="colored-boxed blue">
                        <img src="img/DerechoPenal.jpg"  alt="Abogados Penales"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados Penales</h3>
                        <p>Expertos en Procesos Penales</p>
                        <span class="center-line"></span>
                    </div></a>
                </div>
            <!--colored boxed col end-->

                <div class="col-md-4 col-sm-6 margin30">
                <a href="registro/cotizacion.php">
                    <div class="colored-boxed red">
                        <img src="img/Asesorías para personas y empresas.jpg"   alt="Abogados en Línea"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <h3>Abogados Comerciales</h3>
                        <p>Expertos en Asesorías para personas Juridicas o Naturales</p>
                        <span class="center-line"></span>
                   </div></a>
                </div>
            <!--colored boxed col end-->
        </div>

    </div>

<!--Profesionales-->

            <section>
              <div class="container">
                            <div class="row">
                    <div class="col-sm-12">
                        <div class="center-heading">
                              <h2><strong>¿Qué dicen de nosotros?</strong></h2>
                        </div>
                    </div>
              </div><!--center heading end-->
            </section>


        <div class="fun-fact-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testi-slide">
                            <ul class="slides">
                              <div class="col-sm-4">
                                    <img src="img/Abogados de Familia.jpg" alt="Abogados de Familia">
                                    <h3 class="test-author" style="color:#FFFFFF">
                                        David Bonilla
                                    </h3>                                    
                                        <h4 style="color:#FFFFFF">"Me ayudaron a contratar a un excelente abogado, en tiempo record y al mejor precio."</h4>
                              </div>
                              <div class="col-sm-4">
                                    <img src="img/abogada demanda de alimentos.jpg" alt="Abogado en Línea">
                                    <h3 class="test-author" style="color:#FFFFFF">
                                        Diana Díaz
                                    </h3>
                                        <h4 style="color:#FFFFFF">"Excelente servicio, hice la solicitud y en poco tiempo tuve respuesta de varios abogados en línea."</h4>
                              </div>
                              <div class="col-sm-4">
                                    <img src="img/Asesoria-juridica.jpg" alt="Abogado Laboral">
                                    <h3 class="test-author" style="color:#FFFFFF">
                                        Paola Cifuentes
                                    </h3>
                                        <h4 style="color:#FFFFFF">"Es muy bueno poder comparar diferentes propuestas y contratar a un abogado según el costo, su experiencia y sus estudios."</h4></p>
                              </div>
                            </ul>
                        </div><!--flex slider testimonials end here-->
                    </div>
                </div><!--testi slider row end-->
            </div>
        </div>


        <!--Como funciona-->
        <div class="wide-img-showcase" id="funciona2">
                <div class="center-heading">
                            <br>
                            <span class="center-line"></span>
                            <h2><strong>¿Eres abogado? </strong> <br><br>
                            <p>Te explicamos el ¿Por qué? y el ¿Cómo? ser parte de nuestro grupo de abogados.</p></h2>
                            <span class="center-line"></span>
                </div>
            <div class="row margin-0 wide-img-showcase-row">
                <div class="col-sm-6 no-padding  img-2 ">
                    <div class="no-padding-inner col-sm-12 ">
                    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oet4ble87Gg?rel=0" allowfullscreen></iframe>
                    </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-6 no-padding gray">
                    <div class="no-padding-inner gray">
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-reply-all"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>1.  Regístrate</h4>
                                <p>
                                    Registra gratis tu perfil con experiencia, estudios, especialidades, etc.. Entre mas completo lo tengas, es mas probable que los clientes te seleccionen.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>2.  Responde las solicitudes.</h4>
                                <p>
                                    Responde las solicitudes de los clientes interesados en tus servicios. Podrás comunicarte directamente con ellos.
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>3.  Negocia</h4>
                                <p>
                                    Llega a un acuerdo del costo con el cliente.
                                </p>
                            </div>
                        </div><!--service box-->

                    </div>
                </div>
            </div>

        <div class="divide40"></div>
            <div class="text-center">
            <a href="registro/cotizacion.php" class="btn btn-success btn-lg">Pide una Asesoría a nuestros abogados en línea</a>
            <a href="registro/profesional.php" class="btn btn-warning btn-lg">¿Eres un Abogado? - Regístrate aquí</a>
        <div class="divide40"></div>
        </div>
        </div>


		<div id="funciona12" style="display:none">

	            <div class="center-heading">
                           <span class="center-line"></span>
                            <h2><strong>¿Eres abogado? </strong> <br>
                            <p>Te explicamos el ¿Por qué? y el ¿Cómo? ser parte de nuestro grupo de abogados.</p></h2>
                            <span class="center-line"></span>
                        </div>
				<div class="row">

                <div class="col-sm-6 no-padding ">
                    <div class="no-padding-inner col-sm-12 ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/oet4ble87Gg?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 gray">
                    <div class="gray">
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-reply-all"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>1.	Regístrate</h4>
                                <p>
                                    Registra tu perfil con experiencia, estudios, especialidades, etc...
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-lightbulb-o"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>2.	Responde las solicitudes.</h4>
                                <p>
                                    Responde las solicitudes de los clientes interesados en tus servicios.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>3.	Negocia</h4>
                                <p>
                                    Llega a un acuerdo del costo con el cliente.
                                </p>
                            </div>
                        </div><!--service box-->

                    </div>
                </div>

            </div>
        <div class="divide40"></div>
			<div class="text-center">
            <a href="registro/cotizacion.php" class="btn btn-success btn-lg">Pide una Asesoría <br>a nuestros abogados en línea</a><br><br>
			<a href="registro/profesional.php" class="btn btn-warning btn-lg">¿Eres un Abogado? - Regístrate aquí</a>
        <div class="divide40"></div>
        </div>
        </div>

<?php /*		    <!--contadores-->
        <section class="fun-fact-wrap fun-facts-bg">
            <div class="container">               
		<?php
			$SQL_SUMATORIA = "SELECT COUNT(CODIGO) as TOTAL_PRESUPUESTOS  FROM presupuesto";
			$SQL_SUMATORIA_EXECUTE=$conn->Execute($SQL_SUMATORIA);
			echo $mensaje= $conn->ErrorMsg();	
			$presupuestos=$SQL_SUMATORIA_EXECUTE->fields['TOTAL_PRESUPUESTOS'];

			$SQL_SUMATORIA = "SELECT COUNT(COD_USU) as TOTAL_PROFESIONALES  FROM usu WHERE COD_GRUPO='3' OR COD_GRUPO='4'";
			$SQL_SUMATORIA_EXECUTE=$conn->Execute($SQL_SUMATORIA);
			echo $mensaje= $conn->ErrorMsg();	
			$profesionales=$SQL_SUMATORIA_EXECUTE->fields['TOTAL_PROFESIONALES'];

		?>
                <div class="row">
                    <div class="col-md-4 margin20 facts-in">
                        <h3><span class="counter"><?php echo $presupuestos?></span> +</h3>
                        <h4>Solicitudes de presupuesto</h4>
                    </div><!--facts in-->
                    <div class="col-md-4 margin20 facts-in">
                        <h3><span class="counter"><?php echo $profesionales?></span></h3>
                        <h4>Profesionales Registrados</h4>
                    </div><!--facts in-->
                    <div class="col-md-4 margin20 facts-in">
                        <h3><span class="counter">170</span> +</h3>
                        <h4>Preguntas de la comiunidad </h4>
                    </div><!--facts in-->
                    <!--facts in-->
                </div>
            </div>
        </section> */?>
  
       
        <div class="divide40"></div>
        <div class="intro-text-1 light">
            <div class="container">
                
            </div>
        </div> <!--intro text end-->

        <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Mision</h3>
                            <p>
                                Tus Abogados y Contadores es un emprendimiento 100% Colombiano. Su misión es conectar en el menor tiempo y al menor costo, a todos los Colombianos que requieran una asesoría legal o contable, con los mejores abogados y contadores especialistas del país. 
                            </p>
                            <a href="https://tusabogadosycontadores.co/empleoparaabogados.php"><h3> Soy Abogado</h3></a>
                            <a href="https://tusabogadosycontadores.co/registro/profesional.php"><h3> Soy Contador</h3></a>
                            
                            <ul class="list-inline footer-social">
                                <li>
                                    <a href="<?php echo $facebook?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $twiter?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-twitter">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $google?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
								
                                <li>
                                    <a href="<?php echo $youtobe?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                <i class="fa fa-youtube"></i>
                                <i class="fa fa-youtube"></i>
                            </a>
                                </li>
                                <!--<li>
                                    <a href="#" class="social-icon si-dark si-gray-round si-colored-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>-->
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-4 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Contacto</h3>

                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-envelope"></i> Correo </strong>servicioalcliente@tusabogadosycontadores.co</p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Celular </strong> 3174371815</p></li>
                                <li> <p><strong><i class="fa fa-print"></i> Whatsapp </strong> 3174371815</p></li><br>

                            </ul>
                        </div>


                        <div class="footer-col">
                            <h3>Enlaces de interés </h3>
                             <ul class="list-unstyled contact">
                            <a href="https://ramajudicial.gov.co/" target="_blank">Rama Judicial - </a>
                            <a href="http://www.consejodeestado.gov.co/" target="_blank">Consejo de estado - </a>
                            <a href="http://www.corteconstitucional.gov.co/" target="_blank">Corte constitucional - </a>
                            <a href="http://www.contraloriagen.gov.co/" target="_blank">Contraloría - </a>
                            <a href="http://www.procuraduria.gov.co/"target="_blank">Procuraduría - </a>
                            <a href="http://www.dian.gov.co/"target="_blank">DIAN</a>
                            </ul>
                        </div>
                    </div><!--footer col-->
                    <div class="col-md-4 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Boletín de noticias</h3>
                            <p>
                                Inscríbete y recibirás información de primera mano sobre cómo realizar tus tramites legales y contables. 
                            </p>
                            <form role="form" class="subscribe-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                                </div>
                            </form>
                        </div>                        
                    </div><!--footer col-->

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span><strong>Copyright</strong> tusabogadosycontadores.co &copy; 2016 <br> <a href="../terminos_y_condiciones.pdf" target="_blank">términos y condiciones </a> , <a href="../politicas.pdf" target="_blank"> Políticas de privacidad</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->

<?php // paginas dialog  ?>
<div class="modal inmodal" id="login" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            
                                            
                                        </div>
                                        <div class="modal-body">
						                    <div role="tabpanel" class="login-regiter-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation" class="active"><a href="#log" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Regístrate</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="log">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tu E-mail</label>
                                        <input type="email" class="form-control" id="username" name="username" placeholder="Tu E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tu contraseña</label>
                                        <input type="password" class="form-control" id="passwd2" name="passwd2" placeholder="Password">
                                    </div>                                  
                                    <div class="pull-left">

                                        <p><a onClick="olvide();">Recuperar contraseña</a></p>

                                    </div>
                                    <div class="pull-right">
                                        <button type="button" onClick="enviar();" class="btn btn-theme-dark">Login</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div><!--login tab end-->
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="text-center">
            <a href="registro/cotizacion.php" class="btn btn-success btn-lg">Pide una asesoría</a>
			<a href="registro/profesional.php" class="btn btn-warning btn-lg">¿Eres un Abogado?</a>
        <div class="divide40"></div>
        </div>
                            </div><!--register tab end-->
                        </div>

                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script> 
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/revolution-custom.js"></script>
        <!--cube portfolio plugin-->
        <script src="cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="js/cube-portfolio.js" type="text/javascript"></script>
        <script src="js/pace.min.js" type="text/javascript"></script>
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <!-- Recursos -->
    <script src="js/recursos.js"></script>
		
		
<script>
function enviar(){
if ($("#username").val()=='')	{
	  	$("#username").focus();
		mensaje_error("Error","Debe agregar el Usuario");}
	  else if ($("#passwd2").val()==''){
	     $("#passwd2").focus();
		mensaje_error("Error","Debe agregar el Password");}
	  else {
		$.ajax({
        		type: "POST",
        		url: "comprueba.php",
        		data: 'username=' + $("#username").val() + '&passwd2=' + $("#passwd2").val(),
				success: function(datos){
				if(datos==1){
				location.reload();
				}else if(datos==4){//clientes
				document.location.href = "registro/presupuestos_cli.php";
				}else if(datos==5){//profesionales y clientes
				document.location.href = "procesos/trabajos.php";
				}else if(datos==2){
				mensaje_error("Error","Usuario sin activarse, revise su correo electronico y complete el registro");
				}else{
				mensaje_error("Error","Error en la combinacion de Usuario Password");
				}
				}
			});
		}}
		
function olvide(){
		$.ajax({
        		type: "POST",
        		url: "lista_registro.php",
        		data: 'proceso=' + 'olvide',
				success: function(datos){
				$('#log').fadeOut("slow").html(datos).fadeIn("slow");
				$('#log').trigger('create');
				}
			});}
function enviar_olvide(){
if ($("#username").val()==''){
	     $("#username").focus();
		mensaje_warning("Error","Debe agregar la direccion de correo electronico, para intentar recuperar tu Usuario");}
	else {		$.ajax({
        		type: "POST",
        		url: "lista_registro.php",
        		data: 'username=' + $("#username").val() + '&proceso=' + 'enviar_olvide',
				success: function(datos){
				$('#log').fadeOut("slow").html(datos).fadeIn("slow");
				$('#log').trigger('create');
				}
			});}}
function regresar_login(){
		$.ajax({
        		type: "POST",
        		url: "lista_registro.php",
        		data: 'proceso=' + 'regresar_login',
				success: function(datos){
				$('#log').fadeOut("slow").html(datos).fadeIn("slow");
				$('#log').trigger('create');
				}
			});}
		
</script>
<script>
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
 { 
$("#et1").hide();
$("#et2").hide();
$("#et3").hide();
$("#boton11").hide();
$("#boton22").hide();
$("#boton33").hide();
$("#boton1").show();
$("#boton2").show();
$("#boton3").show();
$("#funciona1").hide();
$("#funciona2").hide();
$("#funciona11").show();
$("#funciona12").show();

}
else
{

}



</script>

<!--microdatos-->
<div class="yasr_schema" itemscope="" itemtype="http://schema.org/Review">

<meta itemprop="datePublished" content="13/01/2017"> |13/01/2017|
    <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating"> Calificación: 
    <span itemprop="ratingValue">4.9</span> de 525 votos
  </span>
    <span itemprop="itemReviewed" itemscope="" itemtype="http://schema.org/Product">  
    <span itemprop="name"> Para Tus Abogados y Contadores</span>
  </span>
    <span itemprop="author" itemscope="" itemtype="http://schema.org/Person"> Revisado por:
        <span itemprop="name"> Tus Abogados y Contadores </span>
  </span>  
</div>   

    </body>
  
</html>
