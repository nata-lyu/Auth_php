<?php 
  $dataarr = file ('database.txt'); //в этом массиве кажд эл-т - это строка "логин пароль"
  $arr_logpass = array ();
  $arr_helper = [];  //в него будем записывать пары лог-пароль, извлекаемые из строки "логин пароль" 
  foreach ($dataarr as $line)  // берем одну строчку из $dataarr
  {
    $arr_helper = explode (' ', $line, 2); //массив из 2-х эл-тов: 1. логин; 2. пароль
    $arr_logpass [$arr_helper[0]] = $arr_helper[1];
  }
  
  $login = $_POST['username'];
  $password = $_POST['password'];

  foreach ($arr_logpass as $log => $pass)  //проходим по ассоциатив. массиву [логины, пароли] и ищем, есть ли введенная пара логин-пароль 
  {
     if (($log == $login) and ($pass == $password))
     {header ('Location: /Check-true.html');
      break;
     }
     else header ('Location: /Check-false.html');
  }
?>