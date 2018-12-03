<?php
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "us-cdbr-iron-east-01.cleardb.net"; //"localhost";
$username = "b0404974d3eb30";//"root";
$password = "50b5f613";//"";
$dbname = "heroku_4f985f2a5726099";//"reactions_master";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *  FROM combination";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>reactant1</th><th>product1</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["reactant1"]. "</td><td>" . $row["product1"]. "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>