<?php
$username = $_POST['ussername']
$email = $_POST['email']
$password = $_POST['password']

$conn = new mysqli("localhost", "root", "", "marvinsinup");
if($conn->connect_error){
    die("connection failed :",$conn->connct_error);
}else {
    $stmt = $conn->prepare("select *from marvinsinup where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result =$stmt->get_result():
    if ($stmt_resiult->num_rows >0) {
    
    }else {
        echo "<h2> Invalid email or password</h2>";
    }
    
}
?>