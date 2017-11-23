<?php


use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client = ClientBuilder::create()->build();


/* Get a Document */


$getDoc=[
    "index"=>"sw_index",
    "type"=>"sw_type",
    "id"=>5,
];

$res=$client->get($getDoc);
print_r($res);
?>