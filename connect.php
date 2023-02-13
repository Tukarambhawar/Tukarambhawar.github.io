<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobailno = $_POST['mobailno'];
$about = $_POST['about'];

$conn = new mysqli('localhost', 'root', '', 'user');
if ($conn->connect_error) {
    die('Connection faild: ' . $connect_error);
} else {
    $stmt = $conn->prepare("insert into data(firstname,lastname,email,mobailno,about) values(?,?,?,?,?)");
    $stmt->bind_param("sssis", $firstname, $lastname, $email, $mobailno, $about);
    $stmt->execute();
    echo "Registration succesfule";
    $stmt->close();
    $conn->close();
}
?>