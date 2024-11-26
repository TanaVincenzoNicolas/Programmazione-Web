<?php
/** Esempio di accesso alle API di PokeAPI
* 
*   Posizionare il file nella cartella public_html ed accedere nel browser:
*   http://lamp.labeconomia.unich.it/~AAAAAAAA/pokemon_client.php
*
**/

function sendRequest($method, $url, $data = null) {
    $options = [
        "http" => [
            "header" => "Content-Type: application/json",
            "method" => $method,
            "content" => $data
        ]
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    return $response;
}

// Esempio di richiesta
$url = "https://pokeapi.co/api/v2/pokemon/1";
$response = sendRequest("GET", $url);
$data = json_decode($response, true);


// Estrazione dei dati essenziali
$pokemon = [
    "id" => $data['id'],
    "name" => $data['name'],
    "types" => array_map(function($type) {
        return $type['type']['name'];
    }, $data['types']),
    "height" => $data['height'],
    "weight" => $data['weight']
];

print_r($pokemon);
