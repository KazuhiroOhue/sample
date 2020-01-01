<?php
//課題１
function kakezan($max){
    echo $max*2;
}

echo kakezan(10);

echo "\n";
//課題２
function tasizan($a,$b){
    echo $a + $b;
}

echo tasizan(3,4);

echo "\n";
//課題３
function zenbu($arr){
    $result = 1;
    foreach($arr as $ar){
        $result *= $ar;
    }
    return $result;
}

echo zenbu(array(1,3,5,7,9));

echo "\n";
//課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(2,5,9,7,3,1,8,6,4));

echo "\n";
//課題５
//strip_tags：HTMLタグを除去
$contents = "<h1>strip_tags関数</h1>"
    ."<p>、これでHTMLタグを除去します</p>";
echo strip_tags($contents);

echo "\n";
//array_push：要素を追加する
$fruits = ["apple","orange","melon"];

array_push($fruits,"banana","pinepple");

print_r($fruits);

//array_merge：配列を結合する
$zodiac1 = ["Rat","Ox","Tigar","Rabbit"];
$zodiac2 = ["Dragon","Snake","Horse","Sheep"];
$zodiac3 = ["Monkey","Cock","Dog","Boar"];

$zodiac_merge = array_merge($zodiac1,$zodiac2,$zodiac3);

print_r($zodiac_merge);

//time:現在時刻のUNIX TIMESTAMPを取得する
$timestamp = time();

echo $timestamp;

echo "\n";
//mktime：指定した日時のUNIX TIMESTAMPを取得する
$tm = mktime(3,4,5,1,2,2015);

//date：日時を出力
echo date("Y年m月d日 H時i分s秒",$tm);