<?php

/* Index a document */

use Elasticsearch\ClientBuilder; 
require  "../vendor/autoload.php";
$client = ClientBuilder::create()->build();


$params = [
    "index"=> "test_index",
    "type"=>"test_type",
    "id"=>"1",
    "body"=> ["test"=>"test"]
];


$response = $client->index($params);
print_r($response);

?>