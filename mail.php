<?php

$json = file_get_contents('../goods.json');
$json = json_decode($json, true);

//pismo
$message = '';
$message .='<h1>Zakaz v magazine<h1>'
$message .= '<p>Tel:'.$_Post['ephone'].'</p>';
$message .='<p>Pochta: '.$_POST['email'].'</p>';
$message .='<p>Klient: '.$_POST['ename'].'</p>';

$cart = $_POST['cart'];
$sum = 0;
foreach ($cart as $id=>$count) {
$message .=$json[$id]['name'].' —- ';
$message .=$count.' —- ';
$message .=$count*$json[$id]['cost'];
$message .='<br>';
$sum = $sum +$count*$json[$id]['cost'];
}
$message .='Всего: '.$sum;

//print_r($message);

var_dump($message);

