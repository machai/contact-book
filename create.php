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
        <title>Create Contact</title>
    </head>
    <body>
        
    <link rel="stylesheet" href="main.css" type="text/css">
	
	
	 
	     
     <div id="wrapper">
	 
	  	<div id="header">
	
		<h1> ADD CONTACT HERE</h1>
	
	</div>	
	  

<?php

/**
 * This php uses an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit'])) {
    require "config.php";
    require "common.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname"  => $_POST['lastname'],
            "email"     => $_POST['email'],
            "phone"       => $_POST['phone'],
        );

        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>



<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['firstname']; ?> Successfully Added.</blockquote>
	
<?php } ?>



<form class="formles" method="post">
    <label for="firstname">First Name</label><br>
    <input type="text" name="firstname" id="firstname"><br>
    <label for="lastname">Last Name</label><br>
    <input type="text" name="lastname" id="lastname"><br>
    <label for="email">Email Address</label><br>
    <input type="text" name="email" id="email"><br>
    <label for="phone">Phone Number</label><br>
    <input type="phone" name="phone" id="phone"><br>
	<br>
    <input type="submit" name="submit" value="Submit"><br>
	<a class="buttonsss" href="address_app.php">Back</a> <br><br>

</form>
<br>
				
	
    
    </body>
</html>
