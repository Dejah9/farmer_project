<!DOCTYPE html>

<html>

<head>
    <title>Liberal</title>
  <meta charset="utf-8">
  <link href="/css/indexpage.css" type="text/css" rel="stylesheet">

</head>

	<body>
	    <div class = "card">
			<img id ="header" src="/images/liberal1.png">
     </div>
	    <div class="showbuttons">
            <button id ="logbut" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </div>
        <div id="id01" class="modal">
  
            <form class="modal-content animate" method = "POST" action="login.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
            
                <div class="container">
                  <label for="uid"><b>UserID</b></label>
                  <input type="text" placeholder="Enter User ID" name="userid" required>
                  
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="username" required>
            
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" required>
   
                  </br>
                  <button type="submit" class="smalllog">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
            
                <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
             </form>
        </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  	</body>

</html>
