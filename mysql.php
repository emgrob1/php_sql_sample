<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dvincitest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/* retrieve data */

$sql = 'SELECT * FROM data Order By room_number ASC';
	$result = $conn->query($sql);
	

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$encode[] =	$row;
        // echo "Classroom Type: " . $row["classroom_type"]. ", Name: " . $row["teacher_name"]. ", Room Number: " . $row["room_number"]. "<br>";
    }
	
	echo json_encode($encode);
}
$conn->close();


// Create database
// $sql = "CREATE DATABASE class";
// if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
// } else {
    // echo "Error creating database: " . $conn->error;
// }


// sql to create table
// $sql = "CREATE TABLE rooms (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// room_number VARCHAR(30) NOT NULL,
// type VARCHAR(30) NOT NULL,
// techer_name VARCHAR(50),
// reg_date TIMESTAMP
// )";
// 
// if ($conn->query($sql) === TRUE) {
    // echo "Table MyGuests created successfully";
// } else {
    // echo "Error creating table: " . $conn->error;
// }

// 
// /* create a prepared statement */
// if ($stmt = $mysqli->prepare('INSERT INTO data (first_name, last_name, email, subject, message) VALUES (?,?,?,?,?)')) {
// 
    // /* bind parameters for markers */
     // $stmt->bind_param("sssss", $first_name,$last_name,$email,$subject,$message);
//     
    // /* execute query */
    // $stmt->execute();
// 
    // /* close statement */
    // $stmt->close();
// }
// 
// 

/* close connection */
//$mysqli->close();