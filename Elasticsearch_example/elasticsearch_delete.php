<?php

use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client=ClientBuilder::create()->build();


/* Delete Document */

$params=[
    "index"=>"test_index",
    "type"=>"test_type",
    "id"=>1,
];

$response=$client->delete($params);
print_r($response);


/* Delete index */


$deleteparams=[
    "index"=>"test_index",
];

$dresponse=$client->indices()->delete($deleteparams);
print_r($dresponse);

?>