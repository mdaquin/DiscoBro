<?php

  $base = $_GET['base'];
if (!isset($base) || $base==null){
  $base = $_POST['base'];
}  

  $url = "http://data.open.ac.uk/query?";
  $first = true;
  foreach ($_GET as $p=>$v){
    if ($first==false){
      $url = $url.'&';
    }  
    $url = $url.$p.'='.urlencode($v);
    $first = false;
  }

  foreach ($_POST as $p=>$v){
    if ($first==false){
      $url = $url.'&';
    }  
    $url = $url.$p.'='.urlencode($v);
    $first = false;
  }

  // echo $url;
  echo file_get_contents($url); 

?>


