<?php
    class Trayecto {
        var $name;
        var $avatar;
        var $origen;
        var $destino;
        var $direc;
        var $hora;
        var $precio;
        var $desc;
        var $plazas;
        var $fechaPubli;
        
        function llenaObjeto($newName, $newAvatar, $newOrigen, $newDestino, $newDirec, $newHora, $newPrecio, $newDesc, $newPlazas, $fechaPubli) {
            $this->name = $newName;
            $this->avatar = $newAvatar;
            $this->origen = $newOrigen;
            $this->destino = $newDestino;
            $this->direc = $newDirec;
            $this->hora = $newHora;
            $this->precio = $newPrecio;
            $this->desc = $newDesc;
            $this->plazas = $newPlazas;
            $this->fechaPubli= $fechaPubli;
        }
        
        
        /** Convierte la descripcion en una descripcion de 80 caracteres **/ 
        function getDescCorta() {
            $descCorta = substr($this->desc, 0, 80);
            $descCorta = $descCorta . "...";
            return $descCorta;
        }
        
        /** Comprueba si el origen es el mismo que el pasado
         * Si coincide devolvemos true
         * Si no coincide devolvemos false
         * 
         * @return bool
         * 
         **/ 
        function igualOrigen($pasoOrigen) {
            if ($pasoOrigen == $this->origen || $pasoOrigen == $this->destino){
                return true;
            } else {
                return false;
            }
        }
        
        function fecha(){
            $fecha = new DateTime();
            $fecha->setTimestamp($this->fechaPubli);
            return $fecha->format('d/m/Y - H:iA');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    /*Creación de un array para los trayectos
        $trayectos= array(
            0=>array(
                'name' => "Antonio Pérez",
                'origen' => "Córdoba",
                'destino' => "Sevilla",
                'direc' => "Calle Poeta Paredes, 25",
                'hora' =>"9:00",
                'precio' =>"10€",
                'plazas' => "3 plazas",
                'avatar' => "images/users/6.jpg"
            ),
            1=>array(
                'name' => "Antonio García",
                'origen' => "Córdoba",
                'destino' => "Huelva",
                'direc' => "Calle Gloria Fuertes, 2",
                'hora' =>"13:00",
                'precio' =>"15€",
                'plazas' => "2 plazas",
                'avatar' => "images/users/2.jpg"
            ),
            2=>array(
                'name' => "Benito Gálvez",
                'origen' => "Córdoba",
                'destino' => "Badajoz",
                'direc' => "Avd. Guerrita, 33",
                'hora' =>"19:00",
                'precio' =>"18€",
                'plazas' => "4 plazas",
                'avatar' => "images/users/3.jpg"
            ),
            3=>array(
                'name' => "Braulio López",
                'origen' => "Jaen",
                'destino' => "Cádiz",
                'direc' => "Avd. Victoria, 45",
                'hora' =>"8:00",
                'precio' =>"13€",
                'plazas' => "1 plazas",
                'avatar' => "images/users/7.jpg"
            ),
            4=>array(
                'name' => "Steleo Kontos",
                'origen' => "Ciudad Real",
                'destino' => "Vitoria",
                'direc' => "Calle Tras la puerta, 2",
                'hora' =>"10:00",
                'precio' =>"20€",
                'plazas' => "2 plazas",
                'avatar' => "images/users/5.jpg"
            )
        );*/
?>