<?php 
include "base.php";

if(isset($_POST['approve'])){
                   foreach ($_POST['check'] as $value){
                        $sql = "UPDATE users SET approved = '1' WHERE first_name = '".$value."'"; //write this query according to your table schema
                    

                        if(mysqli_query($con, $sql)){
                            header("Location: approve_clients.php");
                        }else{
                        	
                        	 echo "<strong>Error: </strong>" .mysqli_error($con);
                        }
                    }
 }elseif ($_POST['delete']) {
     # code...
     foreach ($_POST['check'] as $value){
                        $sql = "DELETE FROM teams WHERE tname = '".$value."'"; //write this query according to your table schema
                    

                        if(mysqli_query($con, $sql)){
                            header("Location: approve_clients.php");
                        }else{
                            
                             echo "<strong>Error: </strong>" .mysqli_error($con);
                        }
                    }
 }elseif($_POST['cancel']){
    header("Location: approve_clients.php");

 }
?>