<?php

require_once 'dbconnect.php';

$conn = new mysqli("localhost", "root", "", "google");

        $name = $_POST['name'];

        $salary = $_POST['salary'];

        $position = $_POST['position'];



  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Classwork</title>
	<!-- GENERAL STYLE -->
	<link rel="stylesheet" href="">

</head>
<body>


<form action="dbconnect.php" method="POST" id="myForm">

                <input type="text" name="name" placeholder="name">

                <input type="text" name="position" placeholder="position">

                <input type="text" name="salary" placeholder="salary">

                <button id="sub">submit</button>
        </form>

<div id="search_results"></div>
<br /><br />
<div class="div_table">
    <div id="item_row_4" class="div_row">
        <div class="div_cell">
             <a id="update_op" class="update_op op" href="classwork.php">update</a>&nbsp;
        </div>
    </div>
    </div>

<p class="output"></p>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script-ajax.js" type="text/javascript"></script>
</body>
</html>