<?php
include_once "../connection.php";
if(isset($_POST['nompil']) && isset($_POST['dnaiss'])){
		 	if(!empty($_POST['adr']) && !empty($_POST['tel']) && !empty($_POST['sal'])){
				
		 		
		 		$nompil = htmlspecialchars($_POST['nompil']);
		 		$dnaiss = htmlspecialchars($_POST['dnaiss']);
                $adr = htmlspecialchars($_POST['adr']);
                $tel = htmlspecialchars($_POST['tel']);
                $sal = htmlspecialchars($_POST['sal']);
                
                
                $sql = "INSERT INTO pilote ( nompil, dnaiss, adr, tel, sal)
                VALUES ('nompil', 'dnaiss', 'adr', 'tel', 'sal')";
                
                if ($con->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $con->error;
                }
                
                $con->close();
            }
		 	}
		
?>