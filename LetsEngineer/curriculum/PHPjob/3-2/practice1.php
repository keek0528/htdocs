<?php
define("TAX",10);
$products=["鉛筆"=>100,"消しゴム"=>150,"物差し"=>500];
function intax($preprice){
    $price=$preprice*(1+TAX/100);
    echo $price;
}
foreach($products as $key=>$value){
    echo $key."の税込価格は";
    intax($value);
    echo "円です";
    echo '<br>';
}
?>