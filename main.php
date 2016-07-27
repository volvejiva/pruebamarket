<?php
  //Incluimos el fichero que tiene toda la información de Twig y Doctrine
  require __DIR__ . '/configuracion.php';
  
  //Creamos un repositorio para almacenar nuestros trayectos y poder enviarlos a la BBDD
  $repositorioTrayecto=$entityManager->getRepository('Trayecto');
  $trayectos=$repositorioTrayecto->findAll();
  
  //Bucle If para ver si ya hay trayectos en la BBDD
  if($trayectos == null){
    // Creamos un objeto de tipo Trayecto y lo asignamos a la variable trayecto1
    $trayecto1 = new Trayecto();
    // Rellenamos el objeto con una serie de datos
    $trayecto1->llenarObjeto(
      "Antonio Pérez",
      "https://addons.cdn.mozilla.net/user-media/userpics/0/0/45.png?modified=1447324257",
      "Córdoba",
      "Huelva",
      "Calle Poeta Paredes, 25",
      1468713600,
      new DateTime('2016-07-17 12:00:00'),
      "10",
      "Un viaje entretenido y seguro, no me gusta correr. Además, pararemos a mitad de camino para tomar una rica tostada de sobrasada, y luego, directos a Huelva.",
      "3"
    );
    
    //Guardamos el trayecto en local con doctrine
    $entityManager->persist($trayecto1);
                  
    // Creamos un objeto de tipo Trayecto y lo asignamos a la variable trayecto2
    $trayecto2 = new Trayecto();
    // Rellenamos el objeto con una serie de datos
    $trayecto2->llenarObjeto(
      "Antonio García",
      "http://megaforo.com/images/user4.png",
      "Sevilla",
      "Cádiz",
      "Ronda de Marrubial, 12",
      1468281600,
      new DateTime('2016-07-12 12:00:00'),
      "6",
      "¿Quieres un viaje de riesgo? Soy tu conductor. Comparte coche conmigo y vive una aventura que recordarás por los siglos de los siglos.",
      "2"
    );
    
    //Guardamos el trayecto en local con doctrine
    $entityManager->persist($trayecto2);
                  
    // Creamos un objeto de tipo Trayecto y lo asignamos a la variable trayecto3
    $trayecto3 = new Trayecto();
    // Rellenamos el objeto con una serie de datos
    $trayecto3->llenarObjeto(
      "Pedro Boniato",
      "http://gh.nsrrc.org.tw/Content/img/male05.png",
      "Córdoba",
      "Málaga",
      "Calle de la Glorieta, 11",
      1467331200,
      new DateTime('2016-07-01 10:30:00'),
      "9",
      "Salida de Córdoba a Málaga, por favor, confirmar lo antes posible ya que suele llenarse rápido el viaje. Posibilidad de seguir después de Málaga hasta Marbella que será mi destino final.",
      "4"
    );
    
    //Guardamos el trayecto en local con doctrine
    $entityManager->persist($trayecto3);
    
    //Se envian a la BBDD todos los persist
    $entityManager->flush();
    $trayectos = array($trayecto1,$trayecto2,$trayecto3);
  }
  
  
  
  
  // Si no se indica un filtro para la fecha, se muestran todos los trayectos
  if ($_GET["posted"] == "") {
    $trayectosFiltradosFecha = $trayectos;
    // Si hay filtro de fecha se hace búsqueda    
  } else {
    $trayectosFiltradosFecha = array();
    for ($i = 0; $i < count($trayectos); $i = $i + 1) {
      // Comienza nuestro bucle
      if ($trayectos[$i]->filtroFecha($_GET["posted"])) {
        $trayectosFiltradosFecha[$i] = $trayectos[$i];
      }
    // Termina nuestro bucle
    }
  }
              
  // Si no se indica filtro, se muestran todos los Trayectos
  if ($_GET['country'] == "") {
    $trayectosFiltrados = $trayectosFiltradosFecha;
    // Si se indica el filtro, se filtran los proyectos    
  } else {
    $trayectosFiltrados = array();
    // Recorremos el array original trayectos para buscar los trayectos a filtrar
    for($i = 0; $i < count($trayectosFiltradosFecha); $i = $i + 1) {
      // Comienza nuestro bucle                
      if ($trayectosFiltradosFecha[$i]->buscar($_GET["country"])) {
        $trayectosFiltrados[] = $trayectosFiltradosFecha[$i];
      }
      // Termina nuestro bucle
    }
  }
  
  if ($_GET["page"] == "list"){
    echo $twig->render('list.html.twig', array(
      'year' =>  date("Y"),
      'posted' => $_GET["posted"],
      'country' => $_GET["country"],
      'trayectos' => $trayectosFiltrados
      )
    );
  }else{
    echo $twig->render('index.html.twig', array(
      'year' =>  date("Y")
      )
    );
  }
?>