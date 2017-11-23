<?php
use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client=ClientBuilder::create()->build();


$params=[
    'index' => 'test_index',
    'type' => 'test_type',
    'body' => [
        'query' => [
            'match' => [
                'test' => 'test'
            ]
        ]
    ]
];

$response=$client->search($params);
print_r($response);


?>