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

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM signup WHERE email='$email'";

$result=$conn->query($sql);
if($result->num_rows>0){

    $row=$result->fetch_assoc();
    
    $passwordfetch=$row['password'];
    
  echo $email.PHP_EOL;
    if(password_verify($password,$passwordfetch)){
        echo 'login';
        echo "Login Succesfully".$email;
        header('Location:./home.html');
    }else{
echo "Invalid Password"  ;
    }
}else{
    echo "No account found in this email";
}

$conn->close();

?>