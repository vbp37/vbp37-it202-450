<?php
require_once(__DIR__ . "/load_api_keys.php");
/*
 * Send a request to the specified URL with the given method.
 * $url = "https://dad-jokes.p.rapidapi.com/random/joke";

 * $key = "96cc7ed0f8msh9a9e1fa4be2fd0ep127f89jsn9dd";
 * $data = [] ;The data to send with the request.
 * 
 * @param string $method The HTTP method to use for the request.
 * @param bool $isRapidAPI Whether the request is for RapidAPI.
 * @param string $rapidAPIHost The host value for the RapidAPI Header
 * 
 * @throws Exception If the API key is missing or empty.
 * 
 * @return array The response status and body.
*/

$url = "https://dad-jokes.p.rapidapi.com/random/joke";
$key = "DADJOKE_API_KEY";
$data = [];
$method = 'GET';
$isRapidAPI = "true";
$rapidAPIHost = "dad-jokes.p.rapidapi.com";

function _sendRequest($url, $key, $data = [], $method = 'GET', $isRapidAPI = true, $rapidAPIHost = "dad-jokes.p.rapidapi.com")

{
    global $API_KEYS;
    // Check if the API key is set and not empty
    if (!isset($API_KEYS) || !isset($API_KEYS[$key]) || empty($API_KEYS[$key])) {
        throw new Exception("Missing or empty API KEY");
    }

    $curl = curl_init();

    $headers = [];
    if ($isRapidAPI) {
        $headers[] = "X-RapidAPI-Host: $rapidAPIHost";
        $headers[] = "X-RapidAPI-Key: " . $API_KEYS[$key];
    } else {
        $headers[] = "x-api-key: " . $API_KEYS[$key];
    }

    $options = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "", // Specify encoding if known
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => $headers,
        //CURLOPT_CAINFO => "C:/php8/certs/cacert.pem",

    ];

    if ($method == 'GET') {
        $options[CURLOPT_URL] = "$url?" . http_build_query($data);
    } else {
        $options[CURLOPT_URL] = $url;
        $options[CURLOPT_POST] = true;
        $options[CURLOPT_POSTFIELDS] = http_build_query($data);
    }
    error_log("curl options: " . var_export($options, true));
    curl_setopt_array($curl, $options);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        throw new Exception($err);
    } else {
        return ["status" => 200, "response" => $response];
    }
}

/**
 * Send a GET request to the specified URL.
 * 
 * @param string $url The URL to send the request to.
 * @param string $key The API key to use for the request.
 * @param array $data The data to send with the request.
 * @param bool $isRapidAPI Whether the request is for RapidAPI.
 * @param string $rapidAPIHost The host value for the RapidAPI Header
 * 
 * @return array The response status and body.
 */
/*$url = "https://dad-jokes.p.rapidapi.com/random/joke";
$key = "DADJOKE_API_KEY";
$data = [];
$method = 'GET';
$isRapidAPI = "true";
$rapidAPIHost = "dad-jokes.p.rapidapi.com"; */
function get($url, $key, $data = [], $isRapidAPI = true, $rapidAPIHost = "")
{
    return _sendRequest($url, $key, $data, 'GET', $isRapidAPI, $rapidAPIHost);
}


/**
 * Send a POST request to the specified URL.
 * 
 * @param string $url The URL to send the request to.
 * @param string $key The API key to use for the request.
 * @param array $data The data to send with the request.
 * @param bool $isRapidAPI Whether the request is for RapidAPI.
 * @param string $rapidAPIHost The host value for the RapidAPI Header
 * 
 * @return array The response status and body. */
/*
$url = "https://dad-jokes.p.rapidapi.com/random/joke";
$key = "DADJOKE_API_KEY";
$data = [];
$method = 'GET';
$isRapidAPI = "true";
$rapidAPIHost = "dad-jokes.p.rapidapi.com"; 
*/

function post($url, $key, $data = [], $isRapidAPI = true,  $rapidAPIHost = "")
{
    return _sendRequest($url, $key, $data, 'POST', $isRapidAPI, $rapidAPIHost);
}
try {
    $response = get($url, $key, [], true, $rapidAPIHost, $API_KEYS);

    var_dump($response);
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}