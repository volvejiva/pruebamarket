<?php
    use Doctrine\ORM\Tools\Console\ConsoleRunner;
    
    // añadimos la configuracion
    require __DIR__ . '/../configuracion.php';
    
    return ConsoleRunner::createHelperSet($entityManager);