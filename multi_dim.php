<?php
    echo "Welcome to multidimensional Arrays";
    $multiDim = array(
        array(1,2,3,4,5),
        array(3,2,3,4,5),
        array(4,2,3,5,5),
    );
    echo "<br>";
    echo $multiDim[2][3];
    // echo var_dump($multiDim);
?>