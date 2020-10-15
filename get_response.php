<?php


// Create connection

$conn = mysqli_connect("localhost","root", "root1234","startup");



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $phoneNr = $_POST['phoneNr'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $plz = $_POST['plz'];
    $houseNr = $_POST['houseNr'];
    $street = $_POST['street'];
    $sql = "INSERT INTO customer (lastName,firstName,phoneNr,email,city,plz,houseNr,street) VALUES ('". $lastName ."','" . $firstName . "', '" . $phoneNr . "', '" . $email . "','" . $city . "','" . $plz . "','" . $houseNr . "','" . $street . "')";
    if (!$result = $conn->query($sql)) {
      die('There was an error running the query [' . $conn->error . ']');
    } else {
      header('Location: recipe_ingredients.html');

  }
?>
