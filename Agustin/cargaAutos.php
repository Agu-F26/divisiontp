<?php
require("con_sql.php");
require_once 'auto.php';

function popularAutos($conex){
    $query = file_get_contents("./sql/cantidadAutos.sql");
    $getCantidad = mysqli_query($conex, $query);
    $cantidadAutos = mysqli_num_rows($getCantidad);
    
    /*for($j = 0; $j < count($autos)/2; $j++){
        echo $autos[$j] . "<br><br>";
    }*/
    //($patente, $marca, $modelo, $anio, $color, $pathImagen)
    for($i = 1; $i <= $cantidadAutos; $i++){
        $query = file_get_contents("./sql/getAutos.sql") . $i;
        $getAutos = mysqli_query($conex, $query);
        $auto = $getAutos->fetch_array();
        if($auto[7] == 1 && $auto[8] == NULL){
          ${"auto".$i} = new auto($auto[0], $auto[1], $auto[2], $auto[3], $auto[4], null, $auto[5], $auto[6]);
          $pat = ${"auto".$i}->getPatente();
          $mar = ${"auto".$i}->getMarca();
          $mod = ${"auto".$i}->getModelo();
          $ani = ${"auto".$i}->getAnio();
          $col = ${"auto".$i}->getColor();
          $id = ${"auto".$i}->getId();
          $pre = ${"auto".$i}->getPrecio();
  
  
          echo "<div class=\"col\">
          <div class=\"card shadow-sm\">
            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: Thumbnail\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Foto del auto</text></svg>
      
            <div class=\"card-body\">
              <p class=\"card-text\">Marca: $mar</p>
              <p class=\"card-text\">Modelo: $mod</p>
              <p class=\"card-text\">Color: $col</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                  <button onclick=\"location.href = 'editpage.php?id=$id' \" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Editar</button>
                  <button onclick=\"location.href = 'deletepage.php?id=$id' \" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Eliminar</button>
                  <button onclick=\"location.href = 'alquilapage.php?id=$id' \" type=\"button\" class=\"btn btn-sm btn-outline-secondary alquilabtn\">Alquila</button>
                </div>
                <small class=\"text-muted\">\$$pre</small>
              </div>
            </div>
          </div>
        </div>";
        } 
    }
}

