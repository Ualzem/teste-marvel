<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  if (isset($_GET['name'])) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $name_to_search = htmlentities(strtolower($_GET['name'])); //  Exemplo: HuLk == hulk

    $ts = time();
    $public_key = 'd4292fb7d729c4c42382bc0f1e962ab9';
  $private_key = '4db1720054a351f31ec4080a118186a6261a73cd';
    $hash = md5($ts . $private_key . $public_key);

    $query = array(
      "name" => $name_to_search, // ""
      "orderBy" => "name",
      "limit" => "20",
      'apikey' => $public_key,
      'ts' => $ts,
      'hash' => $hash,
    );

    $marvel_url = 'https://gateway.marvel.com:443/v1/public/characters?' . http_build_query($query);

    curl_setopt($curl, CURLOPT_URL, $marvel_url);

    $result = json_decode(curl_exec($curl), true);

    curl_close($curl);

    echo json_encode($result);

  } else {
    echo "Error: no name given.";
  }
} else {
  echo "Error: wrong server.";
}