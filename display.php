<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "stamford");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_select_db($conn,"forum");
$sql="SELECT * FROM forum WHERE course_teacher = '".$q."'";

$result = mysqli_query($conn, $sql);

echo "<table>
<tr>
<th>id</th>
<th>Course Code</th>
<th>Course Title</th>
<th>Course Teacher</th>
<th>Question-1</th>
<th>Question-2</th>
<th>Question-3</th>
<th>Question-4</th>
<th>Question-5</th>
<th>Question-6</th>
<th>Question-7</th>
<th>Question-8</th>
<th>Question-9</th>
<th>Question-10</th>
<th>Question-11</th>
<th>Question-12</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['course_code'] . "</td>";
    echo "<td>" . $row['course_title'] . "</td>";
    echo "<td>" . $row['course_teacher'] . "</td>";
    echo "<td>" . $row['ques1'] . "</td>";
    echo "<td>" . $row['ques2'] . "</td>";
    echo "<td>" . $row['ques3'] . "</td>";
    echo "<td>" . $row['ques4'] . "</td>";
    echo "<td>" . $row['ques5'] . "</td>";
    echo "<td>" . $row['ques6'] . "</td>";
    echo "<td>" . $row['ques7'] . "</td>";
    echo "<td>" . $row['ques8'] . "</td>";
    echo "<td>" . $row['ques9'] . "</td>";
    echo "<td>" . $row['ques10'] . "</td>";
    echo "<td>" . $row['ques11'] . "</td>";
    echo "<td>" . $row['ques12'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>