<?php

namespace HTL3R\Jsonexample;

require "src/Actor.php";

$actor = new \HTL3R\Jsonexample\Actor(
    "Angelina Jolie",
    ["Hackers", "Salt", "Tomb Raider", "The Tourist"]
);


if(isset($_GET['format']) && $_GET['format']==='json'){
    header('Content-Type: application/json');
    echo json_encode($actor);
}
else{
    $htmlOutput = <<<HTMLOUTPUT
    <h1>Großartige Filme mit Angelina Jolie</h1>
    <ul>
        <li>Hackers</li>
        <li>Salt</li>
        <li>Tomb Raider</li>
    </ul>
HTMLOUTPUT;
    echo $htmlOutput;
}



