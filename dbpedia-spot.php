<?php


error_reporting(E_ALL);
ini_set('display_errors', '1');

  $url = "http://spotlight.dbpedia.org/rest/annotate?";
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

$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept: application/json\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);
//echo $url;
echo file_get_contents($url,false,$context); 

 
?>


