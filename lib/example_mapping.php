<?php

function map_data($jokeData){
    $records = [];
    foreach($jokeData as $data){
        $record["joke_id"] = $data["_id"];
        $record["setup"] = $data["setup"];
        $record["punchline"] = $data["punchline"];
        array_push($records, $record);
    }
    return $records;
}