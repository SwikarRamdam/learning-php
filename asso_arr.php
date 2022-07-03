<?php
    echo "Associative Array <br>";
    $favNum = array(
        'Swikar' => '7',
        'Hari' => '15',
        8 => "ram"
    );
    // echo $favNum["Swikar"];// like dictionary of python
    // echo "<br>";
    // echo $favNum[8];

    foreach ($favNum as $key=>$value){
        echo "<br Favorite numbers of $key is $value";
    }
?>