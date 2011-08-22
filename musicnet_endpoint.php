<?php

  $base = $_GET['base'];
if (!isset($base) || $base==null){
  $base = $_POST['base'];
}  

  $url = "http://api.kasabi.com/dataset/musicnet/apis/sparql?apikey=8314e4a950e6b62eefc66d5f3f2061ffaf1de742&";
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


