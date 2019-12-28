<?php
//課題１個目
$name="Kazuhiro Ohue";
if ($name=="Kazuhiro Ohue"){
    echo "私は　あなたの名前　です";
} else {
    echo "あなたの名前ではありません";
}

echo "\n";
//課題２個目
$total=0;
for($i=0;$i<=10000;$i++){
    $total+= $i;
}
echo $total;

echo "\n";
//課題３個目
$fruits=array("banana","grape","peach","apple","orange");
foreach($fruits as $fruuuits){
    echo $fruuuits;
    echo "\n";
}