
    <?php

    $n = 3;
    //$array = array();
    $array = [];

    // Opción 1
    // if ($n > 0) {
    //     for ($k = 0; $k <= $n; $k++) {
    //         # code...
    //         //para añadir
    //         $array[] = $k;
    //         //alternativas para añadir valores a un array
    //         //array_push($array, $k);
    //         //$array[$clave] = $k;
    //     }
    // }
    // else{
    //     for ($i=$n; $i <=0 ; $i++) { 
    //         $array[] = $i;
    //     }
    // }

    //Opción 2

    // for ($i=0; $i <=abs($n) ; $i++) { 

    //     if($n<0){
    //         $array[]=$i*(-1);
    //     }
    //     else{
    //         $array[] =$i;
    //     }
    // }

    //Opción 3

    if ($n > 0) {
        $array = range(0, $n);
    } else {
        $array = range($n, 0);
    }

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    ?>
