<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');



$testAdd = Users::addUsers(6,6);
echo "Before You Fill Out This Form, Let's Do Some Math!:$testAdd";
?>
<html>

<form class="cmxform" id="register" method="post" action="results.php">
    <p>
      <label for="firstname" class="fieldlabel">First Name:</label>
      <input id="firstname" name="firstname" type="text" minlength="4" required>
    </p>
    <p>
      <label for="lastname" class="fieldlabel">Last Name:</label>
      <input id="lastname" name="lastname" type="text" minlength="4" required>
    </p>
    <p>
      <label for="email" class="fieldlabel">E-Mail Address:</label>
      <input id="email" type="email" name="email" required>
    </p>
    <p>
      <input class="submit" type="submit" value="Register">
    </p>
</form>
