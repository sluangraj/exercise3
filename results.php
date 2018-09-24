<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');

?>

<html lang="en" >

<head>
  <meta charset="UTF-8">


</head>

<body>

The registered user's first name is: <?php $firstname = $_POST["firstname"]; echo ($firstname);?>
<br>
 The registered user's last name is: <?php $lastname = $_POST["lastname"]; echo ($lastname);?>
<br>
The registered user's email address name is: <?php $email = $_POST["email"]; echo ($email);?>
<br>
<?php
echo"<hr/>";
function testThis(Admin $val){
  echo 'This user is an admin';



}

$users = "";
$admin = new admin ('Stephanie','Charles');
$registered = "";

testThis($admin);
?>
<br>
Processing Complete



</body>

</html>
