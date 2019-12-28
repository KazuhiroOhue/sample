<?php
/*課題1
$a　という変数に3を、$b　という変数に７を代入して、echoを使って$a+$bの結果を表示してみましょう。
*/
$a=3;
$b=7;
echo $a+$b;

echo "\n";
/*課題2
$array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
*/
$array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

echo "\n";
/*課題3
$hello　という変数に　”Hello, “を $name という変数にあなたの名前を、
$world という変数に　”‘s World!” を代入して、各変数を連結させて 
“Hello, あなたの名前’s World!” と表示してみましょう。
*/
$hello="Hello";
$name="Kazuhiro Ohue";
$world="'s World";
echo $hello.$name.$world;

echo "\n";
/*課題4
$tech_boostに “tech “という文字列が代入されています。
複合演算を使って、echo $tech_boostと実行すると「tech boost」と表示されるように
実装してみましょう。
*/
$tech_boost="tech";
$tech_boost.=" boost";
echo $tech_boost;

echo "\n";
/*課題5
応用】次のプログラムにはバグがあります。どこにバグが有るか調べて
修正してみましょう。(バグは一つとは限りません。)
*/
$calendar_2018=[
    "January"=>"1月",
    "February"=>"2月",
    "March"=>"3月",
    "April"=>"4月",
    "May"=>"5月",
    "June"=>"6月",
    "July"=>"7月",
    "August"=>"8月",
    "September"=>"9月",
    "Octorber"=>"10月",
    "November"=>"11月",
    "December"=>"12月"
];

echo $calendar_2018["December"];
/*
訂正をした箇所は以下の通りです
１、$2018_calendarだと数字が頭に来ているので$calendar_2018に変更
２、配列を囲うカッコが中括弧｛｝になっているので、[]に修正
３、"2月"の横のコンマが読点「、」になっているので修正
４、10月がダブルクォーテーションで囲われていないので追加
５、要素を取り出す時のDecemberがダブルクォーテーションで囲われていないので追加
*/

