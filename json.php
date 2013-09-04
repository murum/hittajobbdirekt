<?php
header('Content-Type: application/json;charset=UTF-8');
function get_data($url) { 
  $ch = curl_init(); 
  $timeout = 5; 
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch,CURLOPT_HTTPHEADER,array (
         'Accept: application/json',
         'Accept-Language:sv-se,sv',
         'Content-Type: application/json;charset=UTF-8'
     ));
  $data = curl_exec($ch); 
  curl_close($ch); 
  return $data; 
}; 
$post_data = $_POST['query'];
echo get_data('http://api.arbetsformedlingen.se/platsannons/soklista/yrken/'.$post_data); 
?>