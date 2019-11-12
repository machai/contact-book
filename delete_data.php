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
    <title class="tirt" >View List</title>
</head>
<body>

<link rel="stylesheet" href="main.css" type="text/css">

<div id="wrapper">


    <?php

    /**
     * Function to query information based on a parameter
	 */


    $db['db_host'] = "sql24.cpt1.host-h.net";
    $db['db_user'] = "hotelapcyj_5";
    $db['db_pass'] = "Rme1862Pg3uhHZVeFWS8";
    $db['db_name'] = "hotelapcyj_db5";

    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }

    $conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        $sql = "SELECT * FROM users";
        //$result = $conn->query($sql);
        //print_r($result);

    $result= mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

    //
    //    if ($result && $statement->rowCount() > 0) {
    //
    //        ?>

            <h2>Results</h2>

            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Date</th>
				 <th>Edit/Delele</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["date"] ?> </td>			
							
                   <td>  
                    <a href="remove_contact.php?delete=<?php echo $row["id"];?>" onclick ="return confirm ('Are you Sure ?');" >Delete</a> | 
					
					<a href="remove_contact.php?edit=<?php echo $row["id"];?>"> Edit</a>  </td>
						
						
                    </tr>
                <?php } ?>
                </tbody>
            </table>
    <!--    --><?php //}
    //
    //
    //    else {
    //        echo "0 results";
    //    }

    //$conn->close();

    };

    ?>







    <h2 class="header-section">Search For Contacts Here </h2>

    <form class="search_form" method="post">
        <label for="phone">Name</label>
        <input type="text" id="firstname" name="firstname">
        <input type="submit" name="submit" value="Search"><br>
        <br>

        <a class="buttonsss" href="address_app.php">Back</a> <br><br>
        <br>
    </form>


</body>
</html>
