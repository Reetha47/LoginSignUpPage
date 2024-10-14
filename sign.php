<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . '<br>';

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];


$stmt = $conn->prepare("SELECT * FROM `signup` WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
$result_check = $stmt->get_result();
echo $email;

if ($result_check->num_rows > 0) {
        echo "Email is already taken";
}else{
    if ($password === $re_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo "Data entered";
        $stmt_insert = $conn->prepare("INSERT INTO signup (name,email,phonenumber,address,password) VALUES (?,?,?,?,?)");
        $stmt_insert->bind_param('ssiss', $name, $email, $phonenumber, $address, $hashed_password);
        if ($stmt_insert->execute()) {
            echo "Your are successfully created an account!!";
            header('Location: ./login.html');
        } else {
            echo "Error:" . $stmt->error;
        }
    }else{
        echo "Password doesnt match";
    }
}



  

$stmt->close();
$conn->close();
?>