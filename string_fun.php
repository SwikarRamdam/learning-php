<?php
    $name = "Swikar Ramdam";
    echo "My name is $name . <br>"."It has ". strlen($name)." letters";
    echo "<br>";
  
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name , "d");
    echo "<br>";
    echo str_replace("Swikar", "Sonim", $name);
    echo "<br>";
    echo str_repeat("Sonim",10);
    echo "<br>";
    echo rtrim("<pre>        I am a programmer </prep>   ");//trims space
    echo ltrim("<pre>     I am a programmer </prep>");

    // . joins 2 sentences
?>