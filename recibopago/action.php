<?php

	$userData = count($_POST["name"]);
	/* tengo que separar por , los montos y luego mostrar los datos en una li tag
	 este codigo envia y crea todo por separado
	*/
	if ($userData > 0) {
	    for ($i=0; $i < $userData; $i++) {
		 
		if (trim($_POST['name'] != '') && trim($_POST['email'] != '')) {
			$name   = $_POST["name"][$i];
			$email  = $_POST["email"][$i];
			$query  = "INSERT INTO users (name,email) VALUES ('$name','$email')";
			$result = mysqli_query($con, $query);
		}
	    }
	    echo "Data inserted successfully";
	}else{
	    echo "Please Enter user name";
	}

?>