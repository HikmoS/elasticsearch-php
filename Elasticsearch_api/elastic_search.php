
<?php

use Elasticsearch\ClientBuilder;
require "../vendor/autoload.php";
$client = ClientBuilder::create()->build();


/* Search of a document */


$search = [
    "index"=>"sw_index",
    "type"=>"sw_type",
    "body"=>[
        "query"=>[
            "match"=>[
                "name"=>"Luke Skywalker",
            ]
        ]
    ]
];


$res = $client->search($search);
print_r($res);


?>