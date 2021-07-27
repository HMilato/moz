<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "moznova");
    $msg="";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$password = sha1($password);
        $userType = $_POST['userType'];
       

        $sql = "SELECT * FROM users WHERE username=? AND password=? AND user_type=?";
        $stmt = $conn ->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['user_type'];
        $_SESSION['name'] = $row['name'];
        session_write_close();

        if($result->num_rows==1 && $_SESSION['role']=="student"){
            header("location:estudante/student.php");
        }
        else if($result->num_rows==1 && $_SESSION['role']=="teacher"){
            header("location:instrutor/teacher.php");
        } else if($result->num_rows==1 && $_SESSION['role']=="admin"){
            header("location:admin/index.php");
        }else{
           
            $msg = "Username ou Password está incorreta!";

         
        }



        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/log/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="css/estilo_footer.css"/>
		<link rel="stylesheet" href="css/estilo.css"/> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> 
        <link rel="icon" type="image/png" href="favicon.ico"/>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>Moznova</title>
</head>
<body>
    
    <?php
        include("header/header.php");
        include("inc/slider.php");
        include("login/login.php");
        include("login/form.php");
        include("inc/home_cat.php");
        include("inc/top_courses.php");
         include("inc/footer.php");
        
    ?>
    
</body>
</html>