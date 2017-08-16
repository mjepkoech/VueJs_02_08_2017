<?php
 
class User
{
  public $prop1 = "The user can be an administrator or a customer";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
 
  public function __toString()
  {
      echo "Using the toString method: ";
      return $this->getProperty();
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
class Administrator extends User {
 
  public function newMethod()
  {
      echo "This is an administrator </br> ";
  }
}
 
// Create a new object
$newobj = new Administrator;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();
 
?><?php
session_start();

$userinfo = array(
                'user1'=>'password1',
                'user2'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>OOP PHP</title>
<style>

.demo-table {
	background: #d9eeff;
	width: 50%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>

<body class="demo-table">
<table border="0" width="500" align="center" >
    <th>Login Page</th>
    <tr>
        <td>Username</td>
        <td><input type="text" class="demoInputBox" name="username" value=""></td>
    </td>
    </tr>
    <tr>
        <td>Enter Password</td>
        <td><input type="password" class="demoInputBox" name="password" value=""></td>
    </tr>
    <tr>
        <td colspan=2>
            <input type="checkbox" name="terms"> I accept Terms and Conditions
        </td>
    </tr>
</table>
<centre><button type="submit" name="submit" onclick="displayDate()" class="btnRegister">Log In</button></centre>
<p id="displayarea"></p>
<script>
    function displayDate() {
        document.getElementById("displayarea").innerHTML = "Logged in from: " + Date();
    }
</script>
</body>
</html>