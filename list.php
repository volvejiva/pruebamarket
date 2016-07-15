<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Comparte Tu Coche - Bienvenido a la plataforma de compartir coche</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    
    <!-- Código PhP  -->
    <?php
    
    include 'Trayecto.php';
    date_default_timezone_set('Europe/Madrid');
    $hoy = date("j F, Y, g:i a");
    $year= date("Y");
    $creditos= " Desarrollado por Antonio JiVa";
    
        //Variable de Ciudad e origen pasada por get
        $cOrigen = $_GET['country'];
        $notrayecto = "No se han encontrado trayectos con estos parámetros, Lo sentimos";
    ?>
    
</head>
<body>
    <?php
        $trayectoCordobaSevilla = new Trayecto();
             $trayectoCordobaSevilla->llenaObjeto(
                "Antonio Pérez",
                "images/users/6.jpg",
                "Córdoba",
                "Sevilla",
                "Calle Poeta Paredes, 25",
                "9:00",
                "10€",
                "Soy un sevillita típico, sólo se escuchan marchas de semana santa y carnaval, si no te gusta viva sevilla.",
                "3 plazas",
                "1468401610"
        );
        $trayectoCordobaHuelva = new Trayecto();
            $trayectoCordobaHuelva->llenaObjeto(
                "Antonio García",
                "images/users/2.jpg",
                "Córdoba",
                "Huelva",
                "Calle Gloria Fuertes, 2",
                "13:00",
                "15€",
                "Un viaje entretenido y seguro, no me gusta correr. Además, pararemos a mitad de camino para tomar una rica tostada de sobrasada, y luego, directos a Huelva.",
                "2 plazas",
                "1468146010"
        );
        $trayectoCordobaBadajoz = new Trayecto();
             $trayectoCordobaBadajoz->llenaObjeto(
                "Benito Gálvez",
                "images/users/3.jpg",
                "Córdoba",
                "Badajoz",
                "Avd. Guerrita, 33",
                "19:00",
                "18€",
                "Me gusta la música electrónica y flamenco a todo volumen, y es lo que hay",
                "4 plazas",
                "1468146610"
         );
         $trayectoJaenCadiz = new Trayecto();
             $trayectoJaenCadiz->llenaObjeto(
                "Braulio López",
                "images/users/7.jpg",
                "Jaen",
                "Cádiz",
                "Avd. Victoria, 45",
                "8:00",
                "13€",
                "Al primero que abra la boca para decir cualquier pego se queda en la cuneta a hacer auto stop.",
                "1 plazas",
                "1467072000"
         );
         $trayectoCiudadRealVitoria = new Trayecto();
             $trayectoCiudadRealVitoria->llenaObjeto(
                "Steleo Kontos",
                "images/users/5.jpg",
                "Ciudad Real",
                "Vitoria",
                "Calle Tras la puerta, 2",
                "10:00",
                "20€",
                "Necesito gente con conversación ya que me aburro muchísimo conduciendo y me puedo quedar durmiendo al volante.",
                "2 plazas",
                "1467244800"
         );
         
         $trayectos = array($trayectoCordobaHuelva, $trayectoCordobaSevilla, $trayectoCordobaBadajoz, $trayectoJaenCadiz, $trayectoCiudadRealVitoria);
    ?>
    
<div id="wrapper">
    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                        COMPARTE<span> TU COCHE </span> </a></div>

                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="search-row-wrapper" style="background-image: url(images/jobs/ibg.jpg); background-size: cover; background-position: center center;">
        <form name="search" action="list.php" method="GET">
            <div class="container text-center">
                <div class="col-sm-3 col-sm-offset-3">
                    <select class="form-control" name="country" id="search-category">
                        <option selected="selected" value="">Localidad</option>
                        <option value="Huelva">Huelva</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Sevilla">Sevilla</option>
                        <option value="Jaen">Jaen</option>
                        <option value="Cádiz">Cádiz</option>
                        <option value="Ciudad Real">Ciudad Real</option>
                        <option value="Vitoria">Vitoria</option>
                        <option value="Badajoz">Badajoz</option>
                    </select>    
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-block btn-primary"> Buscar trayectos <i class="fa fa-search"></i></button>
                </div>
            </div>
         </form>
    </div>    

    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
<!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class=" list-filter">
                                <h5 class="list-title"><strong><a href="#"> Filtros </a></strong></h5>

                                <div class="filter-date filter-content">
                                    <ul>
                                        <li>
                                            <input type="radio" value="precio" id="posted_1" name="precio">
                                            <label for="posted_1">Precio</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="3" id="posted_3" name="posted">
                                            <label for="posted_3">3 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="7" id="posted_7" name="posted">
                                            <label for="posted_7">7 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" checked="checked" value="30" id="posted_30"
                                                   name="posted">
                                            <label for="posted_30">30 días</label>
                                        </li>
                                    </ul>
                                    <button class="btn btn-block btn-primary btn-sm" style="width:40%">Filtrar</button>
                                </div>
                            </div>
                            <!--/.categories-list-->
                        </div>
                    </aside>
                </div>
                
                <!--/.page-side-bar-->
                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">
                        <div class="tab-box clearfix ">
                            
                            <!-- Bucle para determinar los trayectos encontrados -->
                            <?php
                                $count=0;
                                for($i=0;$i<count($trayectos);$i++){
                                   if($trayectos[$i]->igualOrigen($cOrigen)){
                                        $count++;
                                    }
                                }
                            ?> <!-- Fin de bucle -->

                            <!-- Nav tabs -->
                            <div class="col-lg-12  box-title no-border">
                                <div class="inner">
                                    <h2><span> Trayectos </span> publicados
                                        <small> <?php echo $count; ?> resultados encontrados</small>
                                    </h2>
                                </div>
                            </div>
                        
                        <!-- Bucle PhP para mostrar los trayectos -->   
                        <?php
                            if($count != 0){
                            for($i=0;$i<count($trayectos);$i++){
                                if($trayectos[$i]->igualOrigen($cOrigen)){
                        ?>
                            <div class="adds-wrapper jobs-list">
                                <div class="item-list job-item">
                                    <div class="col-sm-1  col-xs-2 no-padding photobox">
                                        <div class="add-image"><a href=""><img class="thumbnail no-margin" src="<?php echo $trayectos[$i]->avatar; ?>" alt="Avatar de Usuario"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="col-sm-10  col-xs-10  add-desc-box">
                                        <div class="add-details jobs-item">
                                            <h5 class="company-title"><a href=""><?php echo $trayectos[$i]->name; ?></a></h5>
                                            <h4 class="job-title"><a href="job-details.html"> <?php echo $trayectos[$i]->origen . " a " . $trayectos[$i]->destino; ?> </a></h4>
                                            <span class="info-row">
                                                <span class="item-location"><i class="fa fa-map-marker"></i><?php echo " " . $trayectos[$i]->direc; ?></span>
                                                <span class="date"><i class=" icon-clock"> </i><?php echo $trayectos[$i]->hora; ?></span>
                                                <span class=" salary"><i class=" icon-money"> </i> <?php echo $trayectos[$i]->precio; ?></span>
                                            </span>
                                            <div class="jobs-desc">
                                                <?php echo ($trayectos[$i]->getDescCorta()); ?>
                                            </div>
                                            <div class="job-actions">
                                                <ul class="list-unstyled list-inline">
                                                    <li>
                                                        <span class="save-job">
                                                            <span class="fa fa-users"></span><?php echo " " . $trayectos[$i]->plazas; ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <span class="pull-right">
                                                    <span class="fa fa-pencil-square-o"></span><?php echo " " . ($trayectos[$i]->fecha()); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.add-desc-box-->
    
                                    <!--/.add-desc-box-->
                                </div>
                                <!--/.job-item-->
                            </div>
                       <?php  
                       }
                       } }else{
                           echo "<center><b><big>" . $notrayecto ."</big></b></center>";
                       } 
                       ?> <!--Fin de bucle for y del if-->
                    </div>    
                </div>    
                
            </div>
        </div>
    </div>    
    
    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; <?php echo $year. " - ". $creditos;?></li>
            </ul>
        </div>
    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- include form-validation plugin || add this script where you need validation   -->
<script src="assets/js/form-validation.js"></script>


<!-- include equal height plugin  -->
<script src="assets/js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="assets/js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>