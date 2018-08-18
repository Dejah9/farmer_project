<?php
$sfid = filter_input(INPUT_POST,'sfid');
$sproduceid = filter_input(INPUT_POST,'sproduceid');
$amount = filter_input(INPUT_POST,'amount');
$deliverydate = filter_input(INPUT_POST,'deliverydate');
//if (!empty($driverid)){
  //  if(!empty($status)){
    //    if(!empty($latitude)){
      //          if(!empty($longitude)){
                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "farmerdb";
                    // Creating connection
                    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                    if (mysqli_connect_error()){
                        die('Connect Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
                    }
                    else{
                        
        
                        $status=$_POST['status'];
                        $sql = "update SELLER set amount ='$amount', deliverydate = '$deliverydate' where sfid = '$sfid' AND sproduceid = '$sproduceid'";
                        if ($conn->query($sql)){
                            //echo "<script> alert('Driver's record was successfully updated in our database!'); </script>";
                            // $sql1 = mysqli_query($conn, "update Lastclientidus ed set clientid = $sql1");
                            include('try.html');
                            }
                            else{
                                echo "Error: ". $sql ."<br>". $conn->error;
                                }
                                $conn->close();
                    }
                    
              /*  }
                else{
                    echo"password should not be empty";
                    include('signup.html');
                    die();
                }
            }
            else{
                echo "contactnumber should not be empty";
                include('signup.html');
                die();
        }
            
    }
    else{
        echo "lastname should not be empty";
        include('signup.html');
        die();
        
    }
    
    
}
else{
    echo "firstname should not be empty";
    include('signup.html');
    die();
    }
    */
?>

