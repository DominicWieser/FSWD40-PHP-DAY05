<?php

        $conn = new mysqli("localhost", "root", "", "google");

        $name = $_GET['name'];

        $salary = $_GET['salary'];

        $position = $_GET['position'];

        if ($conn->query("INSERT INTO employees (name, salary, position) VALUES (" . $name . " , " . $salary . " , " .$position.'"')) {

                 echo "Successfully Inserted new Employee";

         } else {

                 echo "Unsuccessful Insertion";

         }

?>