<?php
include('connection.php');
?>



<?php
if(isset($_POST['submits'])){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $cnp = $_POST['cnp'];
    $pin = $_POST['pin'];
    $mail = $_POST['mail'];
    $phn = $_POST['phn'];
    $gender = $_POST['gender'];
    $sqlinsert = "INSERT INTO registration (firstname, middlename,lastname, password, confirmpassword, id, email, phone, gender) VALUES('$fname', '$mname', '$lname', '$pwd','$cnp', '$pin', '$mail', '$phn', '$gender')";
    $result = mysqli_query($con, $sqlinsert);
}
if (isset($result)) {
    echo "<script>alert('Registration Complete')</script>";
    header('location:login.php');
}
else{
    echo "";
}
?>


<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            margin-top: 0px;
            margin-right: 70px;
            margin-bottom: 10px;
            margin-left: 70px;
        }
        h1 {color: blue;}
        ul {list-style-type: none;
            margin top: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;}
        li {float: right;}
        li a {display: inline-block;
            color: white;
            text-align: center;
            font-size: 20px;
            padding: 10px 16px;
            text-decoration: none;}
        li a:hover {background-color: #111;}

    </style>
</head>
<body>
<h1 align="center">Stamford University Bangladesh</h1>
<link href = "registration.css" type = "text/css" rel = "stylesheet" />
<br>
<ul>
    <li><a href="http://localhost:8080/anup/insert.php">Sign-Up</a></li>
    <li><a href="http://localhost:8080/anup/login.php">Student</a></li>
    <li><a href="http://localhost:8080/anup/adlog.php">Administration</a></li>
    <li><a href="http://localhost:8080/anup/contact.html">Contact</a></li>
    <li><a href="http://localhost:8080/anup/about.html">About</a></li>
</ul>
<p align="center">Sign-Up For Student & Administration</p>

<form method="post" action="insert.php">
    <input type="hidden" name="submit" value="true"/>
    <fieldset>
        <div class = "container">
            <div class = "form_group">
                <label>First Name:</label>
                <input type = "text" name = "fname" value = "" required/>
            </div>
            <div class = "form_group">
                <label>Middle Name:</label>
                <input type = "text" name = "mname" value = "" required />
            </div>
            <div class = "form_group">
                <label>Last Name:</label>
                <input type = "text" name = "lname" value = "" required/>
            </div>
            <div class = "form_group">
                <label>Password:</label>
                <input type = "password" name = "pwd" value = "" required/>
            </div>
            <div class = "form_group">
                <label>Confirm-Password:</label>
                <input type = "password" name = "cnp" value = "" required/>
            </div>
            <div class="form_group">
                <label>Student ID</label>
                <input type="text" name="pin" value="" required/>
            </div>
            <div class="form_group">
                <label>E-mail</label>
                <input type="text" name="mail" value="" required/>
            </div>
            <div class="form_group">
                <label>Phone</label>
                <input type="number" name="phn" value="" required/>
            </div>
            <div class="form_group">
                <label>Gender</label>
                Male<input type="radio" name="gender" value="male">
                Female<input type="radio" name="gender" value="female">
            </div>
        </div>
    </fieldset>
    <br />
    <input type="submit" name="submits" value="Confirm New Account" />

</form>

</body>
</html>

