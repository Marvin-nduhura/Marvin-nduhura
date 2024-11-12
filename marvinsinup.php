<?php
$username = $_POST['ussername']
$email = $_POST['email']
$password = $_POST['password']

$conn = new mysqli("localhost", "root", "", "marvinsinup");
if($conn->connect_error){
    die("connection failed :",$conn->connct_error);
}else {
    $stmt = $conn->prepare("insert into marvinsinup(ussername, email, password) values(?, ?, ?)");
    $stmt->bind_param("sss",$username, $email, $password);
    $stmt->execute();
    echo " registration successfully......"
    $stmt->close();
    $stmt->close();
}
?>