<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$description = $_POST['description'];

// Database Connection
echo ("hello");
exit();
$conn = new mysqli('localhost', 'root', '', 'contact_form');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact_us(fullname, email, description)
        values(?, ?, ?)");
        $stmt->bind_param("sss",$fullname, $email, $description);
        $stmt->execute();
        echo "Thanks for submitting your response...";
        $stmt->close();
        $conn->close();
}
?>