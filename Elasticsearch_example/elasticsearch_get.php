<?php


use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client=ClientBuilder::create()->build();


/* Get a document */


$params= [
    "index"=> "test_index",
    "type"=>"test_type",
    "id"=>"1",
];

$response = $client->get($params);
print_r($response);

?>