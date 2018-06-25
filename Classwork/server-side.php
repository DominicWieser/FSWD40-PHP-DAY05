<?php

if (!isset($myObj)) $myObj = new stdClass(); // check whether the object already exists

    $myObj->name = "John";

    $myObj->age = 30;

    $myObj->city = "New York";

    $myJSON = json_encode($myObj);

    echo $myJSON;

/* The output is JSON object

    { "name":"John", "age":30,"city": "New York" }

*/

?>