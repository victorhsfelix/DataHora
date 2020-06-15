<?php
    $m = $_GET['data'];
    $n = $_GET['data2'];

    $d1 = strtotime($m); 
    $d2 = strtotime($n);

    $dataFinal = ($d2 - $d1) /86400;
    if($dataFinal < 0)
    $dataFinal = $dataFinal * -1;
    echo "Entre as duas datas existem $dataFinal dias.";
?>