<?php 
include "base.php";

if(isset($_POST['approve'])){
                   foreach ($_POST['check'] as $value){
                        $sql = "UPDATE projects SET approved = '1' WHERE pname = '".$value."'"; //write this query according to your table schema
                    

                        if(mysqli_query($con, $sql)){
                            header("Location: projects.php");
                        }else{
                        	
                        	 echo "<strong>Error: </strong>" .mysqli_error($con);
                        }
                    }
 }elseif ($_POST['delete']) {
     # code...
     foreach ($_POST['check'] as $value){
                        $sql = "DELETE FROM projects WHERE pname = '".$value."'"; //write this query according to your table schema
                    

                        if(mysqli_query($con, $sql)){
                            header("Location: projects.php");
                        }else{
                            
                             echo "<strong>Error: </strong>" .mysqli_error($con);
                        }
                    }
 }elseif($_POST['cancel']){
    header("Location: approve_projects.php");

 }
?>