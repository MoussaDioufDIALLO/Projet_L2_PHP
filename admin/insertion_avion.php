<?php
include_once "../connection.php";
if(isset($_POST['typeav']) && isset($_POST['cap'])){
		 	if(!empty($_POST['loc']) && !empty($_POST['remarq'])){
				
		 		
		 		$typeav = htmlspecialchars($_POST['typeav']);
		 		$cap = htmlspecialchars($_POST['cap']);
                $loc = htmlspecialchars($_POST['loc']);
                $remarq = htmlspecialchars($_POST['remarq']);
                
                
                $sql1 = "INSERT INTO avion ( typeav, cap, loc, remarq)
                VALUES ('typeav', 'cap', 'loc', 'remarq')";
                
                if ($con->query($sql1) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql1 . "<br>" . $con->error;
                }
                
                $con->close();
            }
		 	}
		
?>