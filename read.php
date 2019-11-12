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
        <title class="tirt" >Search Contact</title>
    </head>
    <body>

 <link rel="stylesheet" href="main.css" type="text/css">
    
     <div id="wrapper">
	 
	  
	  <?php

/**
 * Function to query information based on 
 * a parameter: in this case, firstname.
 */

if (isset($_POST['submit'])) {
    try  {
        
        require "config.php";
        require "common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE firstname = :firstname";

        $firstname = $_POST['firstname'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

        
<?php  
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
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
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><?php echo escape($row["firstname"]); ?></td>
                <td><?php echo escape($row["lastname"]); ?></td>
                <td><?php echo escape($row["email"]); ?></td>
                <td><?php echo escape($row["phone"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
            </tr>
        <?php } ?> 
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['firstname']); ?>.</blockquote>
    <?php } 
} ?> 

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
