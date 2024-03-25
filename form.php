<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "basic";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create a new record in the database
function createRecord($name, $email, $age) {
    global $conn;
    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to read records from the database
function readRecords() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Age: " . $row["age"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Function to update a record in the database
function updateRecord($id, $name, $email, $age) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email', age=$age WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Function to delete a record from the database
function deleteRecord($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


// Create a new record
createRecord("Nick Nelson", "nick@example.com", 30);

// Read records
readRecords();

// Update a record
updateRecord(1, "Nicklous Nelson", "nicklus@example.com", 25);

// Delete a record
deleteRecord(1);

// Close connection
$conn->close();
?>
