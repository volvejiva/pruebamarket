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
        //Declarar variable con toda la frase
        //Recortar variable y que muestre 80 primeros caracteres
        //mostrar variable y 3 puntos susopensivos
        $frase = "Un viaje entretenido y seguro, no me gusta correr. Además, pararemos a mitad de camino para tomar una rica tostada de sobrasada, y luego, directos a Huelva.";
        $fraseCorta= substr($frase,0,80);
        $fraseCorta= $fraseCorta . "...";
        
        //Creación de un array para los trayectos
        $trayectos= array(
            0=>array(
                'name' => "Antonio Pérez",
                'viaje' => "Córdoba a Sevilla",
                'direc' => "Calle Poeta Paredes, 25",
                'hora' =>"9:00",
                'precio' =>"10€",
                'plazas' => "3 plazas"
            ),
            1=>array(
                'name' => "Antonio García",
                'viaje' => "Córdoba a Huelva",
                'direc' => "Calle Gloria Fuertes, 2",
                'hora' =>"13:00",
                'precio' =>"15€",
                'plazas' => "2 plazas"
            ),
            2=>array(
                'name' => "Benito Gálvez",
                'viaje' => "Córdoba a Badajoz",
                'direc' => "Avd. Guerrita, 33",
                'hora' =>"19:00",
                'precio' =>"18€",
                'plazas' => "4 plazas"
            ),
            3=>array(
                'name' => "Braulio López",
                'viaje' => "Córdoba a Cádiz",
                'direc' => "Avd. Victoria, 45",
                'hora' =>"8:00",
                'precio' =>"13€",
                'plazas' => "1 plazas"
            ),
            4=>array(
                'name' => "Steleo Kontos",
                'viaje' => "Córdoba a Vitoria",
                'direc' => "Calle Tras la puerta, 2",
                'hora' =>"10:00",
                'precio' =>"20€",
                'plazas' => "2 plazas"
            )
        );
    ?>
    
</head>
<body>
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

    <div class="search-row-wrapper"
         style="background-image: url(images/jobs/ibg.jpg); background-size: cover; background-position: center center;">
        <div class="container text-center">
            <div class="col-sm-3 col-sm-offset-3">
                <select class="form-control" name="category" id="search-category">
                    <option selected="selected" value="">Localidad</option>
                    <option value="111">Huelva</option>
                    <option value="111">Cordoba</option>
                    <option value="111">Sevilla</option>
                </select>    
            </div>
            <div class="col-sm-3">
                <button class="btn btn-block btn-primary"> Buscar trayectos <i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>    

    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
<!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class=" list-filter">
                                <h5 class="list-title"><strong><a href="#"> Fecha de publicación </a></strong></h5>

                                <div class="filter-date filter-content">
                                    <ul>
                                        <li>
                                            <input type="radio" value="1" id="posted_1" name="posted">
                                            <label for="posted_1">24 horas</label>
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

                            <!-- Nav tabs -->
                            <div class="col-lg-12  box-title no-border">
                                <div class="inner">
                                    <h2><span> Trayectos </span> publicados
                                        <small> <?php echo count($trayectos); ?> resultados encontrados</small>
                                    </h2>
                                </div>
                            </div>
                        
                        <!-- Bucle PhP para mostrar los trayectos -->    
                        <?php for($i=0;$i<count($trayectos);$i++){ 
                            
                        ?>
                            <div class="adds-wrapper jobs-list">
                                <div class="item-list job-item">
                                    <div class="col-sm-1  col-xs-2 no-padding photobox">
                                        <div class="add-image"><a href=""><img class="thumbnail no-margin" src="https://addons.cdn.mozilla.net/user-media/userpics/0/0/45.png?modified=1447324257" alt="Avatar de Usuario"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="col-sm-10  col-xs-10  add-desc-box">
                                        <div class="add-details jobs-item">
                                            <h5 class="company-title"><a href=""><?php echo $trayectos[$i]['name']; ?></a></h5>
                                            <h4 class="job-title"><a href="job-details.html"> <?php echo $trayectos[$i]['viaje']; ?> </a></h4>
                                            <span class="info-row">
                                                <span class="item-location"><i class="fa fa-map-marker"></i><?php echo " " . $trayectos[$i]['direc']; ?></span>
                                                <span class="date"><i class=" icon-clock"> </i><?php echo $trayectos[$i]['hora']; ?></span>
                                                <span class=" salary"><i class=" icon-money"> </i> <?php echo $trayectos[$i]['precio']; ?></span>
                                            </span>
                                            <div class="jobs-desc">
                                                <?php echo "$fraseCorta"; ?>
                                            </div>
                                            <div class="job-actions">
                                                <ul class="list-unstyled list-inline">
                                                    <li>
                                                        <span class="save-job">
                                                            <span class="fa fa-users"></span><?php echo " " . $trayectos[$i]['plazas']; ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.add-desc-box-->
    
                                    <!--/.add-desc-box-->
                                </div>
                                <!--/.job-item-->
                            </div>
                       <?php } ?> <!--Find e bucle for-->
                    </div>    
                </div>    
                
                
            </div>
        </div>
    </div>    
        
    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; 2016 - development by Sopinet Software</li>
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