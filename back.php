<?php
//print_r($_POST);exit;
header("Location: Login.html");

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$mobile_number = $_POST['mobile_number'];
$Username = $_POST['Username'];
$Email_address = $_POST['Email_address'];
$Password1 = $_POST['Password1'];
$Date_Of_Birth = $_POST['Date_Of_Birth'];


//2. connect to mysql database                      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'registration_pro';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//3. save the form data in mysql database
$sql = 'INSERT INTO store(First_name, Last_name, mobile_number, Username, Email_address, Password1, Date_Of_Birth) 
VALUES ("' . $First_name . '", "' . $Last_name . '", "' . $mobile_number . '", "' . $Username . '", "' . $Email_address . '",  
"' . $Password1 . '",  "' . $Date_Of_Birth . '")';



if ($conn->query($sql) === TRUE) {
    //echo "new record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();








        