<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) ) {
  if (isset($_GET['comic-id'])) {

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  
    $comic_id = htmlentities(strtolower($_GET['comic-id']));
  
    $ts = time();
    $public_key = 'd4292fb7d729c4c42382bc0f1e962ab9';
  $private_key = '4db1720054a351f31ec4080a118186a6261a73cd';
    $hash = md5($ts . $private_key . $public_key);
  
    $query = array(
      'apikey' => $public_key,
      'ts' => $ts,
      'hash' => $hash
    );
  
    curl_setopt($curl, CURLOPT_URL,
      "https://gateway.marvel.com:443/v1/public/comics/" . $comic_id . "?" . http_build_query($query)
    );
    
    $result = json_decode(curl_exec($curl), true);
    
    curl_close($curl);
  
    echo json_encode($result);

  } else {
    echo "Error invalid comic id";
  }
} else {
  echo "Error: wrong server.";
}