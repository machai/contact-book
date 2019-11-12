<?php

/*************************************************************
 * Author: Machai Justine Bulawayo
 * Php Adress Book Application

 ************************************************************/


?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title class="tirt" >Delete From The List</title>
</head>
<body>

<link rel="stylesheet" href="main.css" type="text/css">

<div id="wrapper">


    <?php

   

    $db['db_host'] = "sql24.cpt1.host-h.net";
    $db['db_user'] = "hotelapcyj_5";
    $db['db_pass'] = "Rme1862Pg3uhHZVeFWS8";
    $db['db_name'] = "hotelapcyj_db5";

    require "config.php";
    require "common.php";
    require "delete.php";

    // Create connection

    $conn = new mysqli($host, $username, $password, $dbname);

	

	
	
	if (isset($_GET["delete"])) {

        $id = $_GET["delete"];

        $sql = "DELETE FROM users WHERE id = '{$id}'";

        mysqli_query($connection, $sql);
    }


    if (isset($_POST["update_item"])) {

        $item_to_update = $_POST["item_to_update"];
        $id =  $_POST["id"];

        $sql = "UPDATE my_list SET item_name='{$item_to_update}' WHERE id='{$id}'";

        mysqli_query($connection, $sql);
    }
	
	
	
	
	
    //$conn->close();

    ?>

    

</body>
</html>
