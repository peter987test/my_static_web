<?PHP

require('./php2/conn.php');

$inputName = $_POST['inputName'];
$inputEmail = $_POST['inputEmail'];
$inputSubject = $_POST['inputSubject'];
$inputMessage = $_POST['inputMessage'];

// print ("You're not a member of this site". $inputName . $inputEmail .$inputSubject . $inputMessage);

$sql = "INSERT INTO message (name, email, subject, message) VALUES ('" . $inputName . "','" . $inputEmail . "','" . $inputSubject . "','" . $inputMessage . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>