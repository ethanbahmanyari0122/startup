<?php
require_once("config.php");
if((isset($_POST['lname'])&& $_POST['lname'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')){
  $lastName = $conn->real_escape_string($_POST['lname']);
  $firstName = $conn->real_escape_string($_POST['fname']);
  $phoneNr = $conn->real_escape_integer($_POST['phoneNr']);
  $email = $conn->real_escape_string($_POST['email']);
  $city = $conn->real_escape_string($_POST['city']);
  $plz = $conn->real_escape_integer($_POST['plz']);
  $houseNr = $conn->real_escape_integer($_POST['houseNr']);
  $street = $conn->real_escape_string($_POST['street']);
  $sql="INSERT INTO customer (lastName, firstName,phoneNr, email,city,plz,houseNr,street) VALUES ('".$lastName."','".$firstName."', '".$phoneNr."', '".$email."','".$city."','".$plz."','".$houseNr."','".$street."')";
  if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
  }
  else
  {
    echo "Thank you! We will contact you soon";
  }
  }

else
{
  echo "Please fill Name and Email";
}
?>
