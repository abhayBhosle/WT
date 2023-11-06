<html>
	<body>
		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			{
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("cse");

			$sql="INSERT INTO Book (ISBN,title, authors, edition,publisher)
			    VALUES ('$_POST[ISBN]','$_POST[Title]','$_POST[Author]','$_POST[Edition]',’$_POST[Publisher]’)";

			if (!mysql_query($sql,$con))
			{
				die('Error: ' . mysql_error());
			}
			echo "1 record added";
			mysql_close($con)
		
		?>
		<form action="program8results.php" method="post">
			Name: <input type="text" name="Title" />
			<input type="submit" />
		</form>
 
	</body>
</html> 
<!-- localhost8080/dashboard/
path: Xampp 
            ht docs 
            your folder 
            .html 
            .css
            .js  -->