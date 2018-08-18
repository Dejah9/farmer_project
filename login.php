<?php
$userid = filter_input(INPUT_POST,'userid');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
if (!empty($userid)){
    if (!empty($username)){
        if(!empty($password)){
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
                    $sql1 = mysqli_query($conn, "Select user_id, username, password from User where user_id ='$userid' and username = '$username' and password = md5('$password')");
                }
                if (mysqli_num_rows($sql1) == 0){
                    echo "<script> alert('Access Denied'); </script>";
                    include 'index.html';
                    }
                    else{
                        echo "<script> alert('WELCOME'); </script>";
                        include 'try.html';
                        }
                    $conn->close();
            
                    
        }
        else{
            echo "password should not be empty";
            die();}
}
else{
    echo "Username should not be empty";
    die();
}
}

else{
    echo "User ID should not be empty";
    die();
}

?>

