<?php

session_start();

$name = $_POST['name'];
$group = $_POST['group'];
$gender = $_POST['gender'];
$year = $_POST['year'];
$month = $_POST['month'];
$dayz = $_POST['dayz'];
$doDrive = $_POST['doDrive'];

$currentYear = 2022;
$pensia = 0;
$age = $currentYear - $year;

if($gender == "male"){
  $pensia = 65 - $age;
} else{
  $pensia = 63 - $age;
}

if ($pensia > 0){
  echo $pensia;
  $_SESSION['message'] = 'Лет до пенсии: '.$pensia.'<br/>'.'Вам: '.$age;
  header('Location: index.php');
} else {
  $_SESSION['message'] = 'Вам: '.$age.'<br/>'.'Вы уже находитесь на пенсии';
  header('Location: index.php');
}