<?php
$my_name=$_POST['my_name'];
$number=$_POST['number'];
$output=$number*mt_rand(1,6);
function omikuji($x){
    if(1<=$x && $x<=10){
        echo "凶";
    }
    elseif($x<=15){
        echo "小吉";
    }
    elseif($x<=20){
        echo "中吉";
    }
    elseif($x<=25){
        echo "吉";
    }
    elseif($x<=36){
        echo "大吉";
    }
    elseif(37<=$x){
        echo "残念";
    }
}
date_default_timezone_set('Asia/Tokyo');
?>
<P><?php echo date('Y-m-d H:i:s',time()); ?></p>
<P>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $output; ?>です。</p>
<p>結果は<?php omikuji($output); ?>です。</p>