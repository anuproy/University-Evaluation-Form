<?php
include('connection.php');
?>

<?php
if(isset($_POST['submit']))
{
    $student_id=$_POST['id'];
    $password=$_POST['password'];
    try{

        if(empty($student_id)){
            echo "<br>";
            throw new Exception("<div class='error'>id can not be empty</div>"."<br>");
        }
        if(empty($password)){
            throw new Exception("<div class='error'>password can not be empty</div>");
        }
        $num=0;
        $result= mysqli_query($con,"select * from registration WHERE id='$student_id' and password='$password'");
        $num=mysqli_num_rows($result);
        if ($num>0) {
            session_start();
            $_SESSION['name']="anup";
            header('location: forum.php');//login thic moto hole
        }
        else{
            throw new Exception("<div class='error'>Please Enter Valid Username or Password</div>");
        }
    }catch (Exception $e){
        $error_msg=$e->getMessage();
    }
}

?>

<?php
if(isset($_POST['register'])){
    header('location:insert.php');
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <Style>
        body {
            margin-top: 0px;
            margin-right: 70px;
            margin-bottom: 10px;
            margin-left: 70px;
        }
        h1 {color: blue;}
        h2 {color: #1E90FF;}
        ul {list-style-type: none;
            margin: 0;
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
        .error{
            color: red;
        }

    </Style>
    <link rel="stylesheet" href="login.css">
    <h1 align="center">Stamford University Bangladesh</h1>
</head>
<body>
<body style="background-color:powderblue;">

<br>
<ul>
    <li><a href="http://localhost:8080/anup/insert.php">Sign-Up</a></li>
    <li><a href="http://localhost:8080/anup/login.php">Student</a></li>
    <li><a href="http://localhost:8080/anup/adlog.php">Administration</a></li>
    <li><a href="http://localhost:8080/anup/contact.html">Contact</a></li>
    <li><a href="http://localhost:8080/anup/about.html">About</a></li>


</ul>
<h2 align="center">Student Login</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Id" name="id"><br/><br/>
    <input type="password" placeholder="Password" name="password"><br/>
    <!--<input type="checkbox" checked="checked"> Remember me<br/> -->
    <input type="submit" name="submit" value="Login">

    <input type="submit" name="register" value="Register Now">
  

</body>
</html>
<?php
if(isset($error_msg)){
    echo $error_msg."<br>";
}
?>
