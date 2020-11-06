

<?php 
   //include 'database.docx';
   $login = 'php';
   $password = '123456';
   if (($_POST['username'] == $login) && ($_POST['password'] == $password ))
       header ('Location: Check-true.html');
       else header ('Location: Check-false.html');
?>
