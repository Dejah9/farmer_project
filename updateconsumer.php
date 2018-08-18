<?php
$c_id = filter_input(INPUT_POST,'c_id');
$name = filter_input(INPUT_POST,'name');
$location = filter_input(INPUT_POST,'location');
$phone = filter_input(INPUT_POST,'phone');
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
                        $sql = "update CONSUMERS set name ='$name', location = '$location', phone ='$phone' where c_id = '$c_id'";
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

