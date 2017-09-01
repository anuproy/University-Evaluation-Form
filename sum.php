<?php
$conn = mysqli_connect("localhost", "root", "", "stamford");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_select_db($conn,"forum");

function compute()
{
	$ques1 = $_row['ques1'];
	$ques2 = $_row['ques2'];
	$ques3 = $_row['ques3'];
	$ques4 = $_row['ques4'];
	$ques5 = $_row['ques5'];
	$ques6 = $_row['ques6'];
	$ques7 = $_row['ques7'];
	$ques8 = $_row['ques8'];
	$ques9 = $_row['ques9'];
	$ques10 = $_row['ques10'];
	switch($_row['course_teacher'])
	{
		case "selectedTeacher":
		SELECT SUM(course_teacher) FROM forum WHERE [$ques1,$ques2,$ques2,$ques4,$ques5,$ques6,$ques7,$ques8,$ques9,$ques10]
 
		//SELECT sum = $ques1 + $ques2 + $ques3 + $ques4 + $ques5 + $ques6 + $ques7 + $ques8 + $ques8 + $ques10;
		//return $sum;
		//break;
	}
}
echo "Total Score is:" .compute();
xmlhttp.open("GET","sum.php?q=" +str,true);
            xmlhttp.send();
<br>

?>