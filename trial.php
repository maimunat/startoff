<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>




        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back<br/></a>
        <form action="trial.php" method="POST">
           Enter Username: <input type="text" name="username" require ="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <button type="submit">Register</button>
        </form>
		
		<?php 
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);

echo "username entered isss: ".$username."<br>";
echo "password entered is ".$password."<br>";

} 

?>
    </body>
</html>