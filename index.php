<?php 


include_once 'koneksi.php';



if (isset($_POST["userid"], $_POST["token"])){
	$isiid = $_POST["userid"];
	$isitoken = $_POST["token"];


	// Check connection
	if($conmysql === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}



	// Escape user inputs for security
	$isi_id = mysqli_real_escape_string($conmysql, $isiid);
	$isi_token = mysqli_real_escape_string($conmysql, $isitoken);
		if ($isiid == "" || $isitoken == ""){
			echo "Fatal Error";
		} else {
			// attempt insert query execution
			$sql = "SELECT * FROM user where user='$isi_id' and date(expired) > CURDATE() and hour(expired) > hour(now()) ";
			$result = $conmysql->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    // while($row = $result->fetch_assoc()) {
			       echo "ilfan14";
			    // }
			} else {
			    echo "Expired";
			}

			// close connection
			mysqli_close($conmysql);
		}




}




?>