<?php
    // echo "Hi";
    function processMarks($marr){
        $sum = 0;
        foreach ($marr as $value){
            $sum += $value;
        }
        return $sum;
    }
    $sw = [2,3,4,5];
    $ht = [2,3,4,5];
    $sumMarks = processMarks($sw);
    $hari = processMarks($ht);
    echo "Total marks = $sumMarks";
    echo "<br>";
    echo "Total marks = $hari";

?>