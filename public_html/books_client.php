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


$url = "http://localhost:8000/api/books/";
$response = sendRequest("POST", $url, $data);
$data = [
        "title" => "Nuovo libro",
        "author" => "Nuovo Autore",
        "year" => 2024
    ];

// Esempio di richiesta
$url = "http://localhost:8000/api/books/";
$response = sendRequest("GET", $url);
$data = json_decode($response, true);

// $book = [
//     "id" => $data["id"],
//     "title" => $data["title"],
//     "author" => $data["author"],
//     "year" => $data["year"]
// ];


print_r($data);
