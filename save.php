<?php

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$budget = $_POST["budget"];
$service = $_POST["service"];
$requirement = $_POST["requirement"];
$description = $_POST["description"];

$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
$sql = "INSERT INTO database_table(Name, Email, Mobile, Budget, Service, Requirement, Description) VALUES ('{$name}','{$email}','{$mobile}','{$budget}','{$service}','{$requirement}','{$description}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location:http://localhost/Dragonware%20Design%20And%20Build/contactfrom.php");
mysqli_close($conn);
?>