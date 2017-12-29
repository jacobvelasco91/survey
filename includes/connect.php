<?php //Database connection credentials
  $hn = "localhost"; //HOSTNAME
  $un = "id4131025_localhost";//USERNAME
  $pw = "poplol11";//PASSWORD
  $db = "id4131025_velasco";//STORE
  $Conn = new mysqli($hn,$un,$pw,$db);
  if ($Conn == false) {
    header('refresh:3 url=../index.php');
    echo "sorry, we're experiencing some technical issues";
  }
 ?>
