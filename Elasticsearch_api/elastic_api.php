<?php

use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client = ClientBuilder::create()->build();


$i=1;
while($i<=15) {


    $req = file_get_contents("http://swapi.co/api/people/" . strval($i));
    $data = json_decode($req, true);


    $params = [
        "index" => "sw_index",
        "type" => "sw_type",
        "id" => $i,
        "body" => $data,
    ];

    $i=$i+1;


    $request = $client->index($params);
    print_r($request);
}


?>