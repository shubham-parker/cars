<?php

		
		$conn = mysqli_connect("localhost", "root", "", "test");
		
		
		if($conn === false){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
		
		
		
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Contact = $_POST['Contact'];
		
	
		
		
		
		$sql = "INSERT INTO contact (Name, Email, Contact) VALUES ('$Name', '$Email','$Contact')";


		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n $Name\n $Email\n $Contact");
			

		} else{
			echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>