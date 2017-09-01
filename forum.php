<?php
include('connection.php');
?>

<?php
ob_start();
session_start();
if($_SESSION['name'] != "anup"){
    header('location: login.php');
}
?>


<?php
if(isset($_POST['submit'])){
    $course_code=$_POST['cCode'];
    $course_title=$_POST['cTitle'];
    if(isset($_POST['department'])){
        $course_teacher=$_POST['department'];
    }
    $ques1=$_POST['marks1'];
    $ques2=$_POST['marks2'];
    $ques3=$_POST['marks3'];
    $ques4=$_POST['marks4'];
    $ques5=$_POST['marks5'];
    $ques6=$_POST['marks6'];
    $ques7=$_POST['marks7'];
    $ques8=$_POST['marks8'];
    $ques9=$_POST['marks9'];
    $ques10=$_POST['marks10'];
    $ques11=addslashes($_POST['textone']);
    $ques12=addslashes($_POST['texttwo']);
    $foruminsert = "INSERT INTO forum (course_code,course_title,course_teacher,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques10,ques11,ques12) VALUES('$course_code','$course_title', '$course_teacher', '$ques1','$ques2', '$ques3', '$ques4', '$ques5', '$ques6','$ques7', '$ques8', '$ques9','$ques10', '$ques11','$ques12')";
    $result = mysqli_query($con,$foruminsert);
}
if (isset($result)) {
    echo "<script>alert('Course Teacher Evaluation form successfully done')</script>";
}
else{
    echo "";
}
?>

<html>
<head>
    <title>Stamford University Bangladesh</title>
    <style>
        body {
            margin-top: 10px;
            margin-right: 40px;
            margin-bottom: 10px;
            margin-left: 70px;
        }
        h1 {color: blue;}
        h2 {color: #1E90FF;}
    </style>
    <h1 align="center">Stamford University Bangladesh</h1>
    <marquee behavior="alternate"> <h2>WelCome to Course Teacher Evaluation Form</h2></marquee>
</head>
<body style="background-color:powderblue;">

<style type="text/css">
    p1 {margin-left: 10.5em;padding: 0 7em 2em 0;border-width: 2px;"}
</style>

<form method="post" action="" name="forumOne">
<div class="textone" align="center" style="padding: 11px">
    <div class = "form_group">
        <label>Couse Code:</label>
        <input type = "text" name = "cCode" value = "" required/>
    </div>

    <div class = "form_group">
        <label>Course Title:</label>
        <input type = "text" name = "cTitle" value = "" required/>
    </div>

    <div class = "form_group">
        <label>Course Teacher:</label>
        <select name="department">
            <option value="Dr. Kamruddin Md. Nur">1.Dr. Kamruddin Md. Nur</option>
            <option value="Prof. Dr. M. Mahfuzul Islam">2.Prof. Dr. M. Mahfuzul Islam</option>
            <option value="Prof. Dr. Mohammad Hanif Ali">3.Prof. Dr. Mohammad Hanif Ali</option>
            <option value="Dr. Mohammad Shaharia Bhuyan">4.Dr. Mohammad Shaharia Bhuyan</option>
            <option value="Tamanna Haque Nipa">5.Tamanna Haque Nipa</option>
            <option value="Mohammad Manzurul Islam">6.Mohammad Manzurul Islam</option>
            <option value="Tamjid Rahman">7.Tamjid Rahman</option>
            <option value="Md. Shahedul Islam">8.Md. Shahedul Islam</option>
            <option value="Tarikuzzaman Emon">9.Tarikuzzaman Emon</option>
            <option value="Tarin Kazi">10.Tarin Kazi</option>
            <option value="Nazia Hossain">11.Nazia Hossain</option>
            <option value="Israt Jahan Mouri">12.Israt Jahan Mouri</option>
            <option value="Shifat Sharmin Shapla">13.Shifat Sharmin Shapla</option>
            <option value="Nilufa Yeasmin">14.Nilufa Yeasmin</option>
            <option value="Mahfida Amjad Dipa">15.Mahfida Amjad Dipa</option>
            <option value="Zonayed Ahmed">16.Zonayed Ahmed</option>
            <option value="Maliha Mahbub">17.Maliha Mahbub</option>
            <option value="Md. Rayhan Ahmed">18.Md. Rayhan Ahmed</option>
            <option value="Rianon Zaman">19.Rianon Zaman</option>
            <option value="Tanveer Ahmed">20.Tanveer Ahmed</option>
            <option value="Adnan Ferdous Ashrafi">21.Adnan Ferdous Ashrafi</option>
            <option value="Shah Sharfuddin Mahin">22.Shah Sharfuddin Mahin</option>
            <option value="Aiasha Siddika">23.Aiasha Siddika</option>
            <option value="Nahida Parvin">24.Nahida Parvin</option>
            <option value="Ahmed Abdal Shafi Rasel">25.Ahmed Abdal Shafi Rasel</option>
            <option value="Md Towhidul Islam Robin">26.  Md Towhidul Islam Robin</option>

        </select>
    </div>
</div>



    <div class="form_group">
        <label><p><b>Question No-01: How would you rank your teacher?</b></p></label>
        </br>
        <input type="radio", name="marks1" value="5" >5
        <input type="radio" name="marks1" value="4"> 4
        <input type="radio" name="marks1" value="3"> 3
        <input type="radio" name="marks1" value="2"> 2
        <input type="radio" name="marks1" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-02: How much relevant were your exams,tests& assignments to the syllabus?</b></p></label>
        </br>
        <input type="radio", name="marks2" value="5" >5
        <input type="radio" name="marks2" value="4"> 4
        <input type="radio" name="marks2" value="3"> 3
        <input type="radio" name="marks2" value="2"> 2
        <input type="radio" name="marks2" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-03: How punctual was the teacher in starting and ending the lesson? </b></p></label>
        </br>
        <input type="radio", name="marks3" value="5" >5
        <input type="radio" name="marks3" value="4"> 4
        <input type="radio" name="marks3" value="3"> 3
        <input type="radio" name="marks3" value="2"> 2
        <input type="radio" name="marks3" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-04: Were you satisfied with your teacher's time management in the class?</b></p></label>
        </br>
        <input type="radio", name="marks4" value="5" >5
        <input type="radio" name="marks4" value="4"> 4
        <input type="radio" name="marks4" value="3"> 3
        <input type="radio" name="marks4" value="2"> 2
        <input type="radio" name="marks4" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question-05: Was the teacher cooperative & willing in giving you time for counseling?</b></p></label>
        </br>
        <input type="radio", name="marks5" value="5" >5
        <input type="radio" name="marks5" value="4"> 4
        <input type="radio" name="marks5" value="3"> 3
        <input type="radio" name="marks5" value="2"> 2
        <input type="radio" name="marks5" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-06: How readily could your teacher respond to your questions in the class? </b></p></label>
        </br>
        <input type="radio", name="marks6" value="5" >5
        <input type="radio" name="marks6" value="4"> 4
        <input type="radio" name="marks6" value="3"> 3
        <input type="radio" name="marks6" value="2"> 2
        <input type="radio" name="marks6" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-07: Did the teacher use English as the medium of instructions in the class? </b></p></label>
        </br>
        <input type="radio", name="marks7" value="5" >5
        <input type="radio" name="marks7" value="4"> 4
        <input type="radio" name="marks7" value="3"> 3
        <input type="radio" name="marks7" value="2"> 2
        <input type="radio" name="marks7" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-08: How much promptness your teacher could show while giving you feedback on your test or lesson? </b></p></label>
        </br>
        <input type="radio", name="marks8" value="5" >5
        <input type="radio" name="marks8" value="4"> 4
        <input type="radio" name="marks8" value="3"> 3
        <input type="radio" name="marks8" value="2"> 2
        <input type="radio" name="marks8" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-09: Did teacher deal with the latest development of knowledge in your courses? </b></p></label>
        </br>
        <input type="radio", name="marks9" value="5" >5
        <input type="radio" name="marks9" value="4"> 4
        <input type="radio" name="marks9" value="3"> 3
        <input type="radio" name="marks9" value="2"> 2
        <input type="radio" name="marks9" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-10: Did the teacher utilize the modern facilities of teaching? </b></p></label>
        </br>
        <input type="radio", name="marks10" value="5" >5
        <input type="radio" name="marks10" value="4"> 4
        <input type="radio" name="marks10" value="3"> 3
        <input type="radio" name="marks10" value="2"> 2
        <input type="radio" name="marks10" value="1"> 1
    </div>

    <div class="form_group">
        <label><p><b>Question No-11: Out of 24 classes (12+12) before and after the mid-term exam, how many classes were taken by the course teacher? </b></p></label>
        </br>
        <textarea rows="5" cols="100" name="textone"></textarea></p>
    </div>

    <div class="form_group">
        <label><p><b>Question No-12: Comment on the overall performance of the course teacher.</b></p></label>
        </br>
        <textarea rows="5" cols="100" name="texttwo"></textarea></p>
    </div>
    <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>
