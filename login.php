<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header('location: admin/admindash.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-social.css">
</head>
<body>
    <a href="index.php">Back</a>
    <h1 align="center">Admin login</h1>

    <form method="post" action="login.php">
        <table style="width: 15%;" align="center">
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="uname" required>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>


    <script src="bootstrap/jquery.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

</body>
</html>


<?php
    include('dbcon.php');

    if(isset($_POST['login'])){
        $username = $_POST['uname'];  $password = $_POST['password'];

        $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
        $run = mysqli_query($con, $qry);
        $row = mysqli_num_rows($run);

        if($row < 1){
            ?><script> 
                alert('invalid username or password');
                window.open('login.php','_self');
             </script><?php
        }else{
            $data = mysqli_fetch_assoc($run);
            $id = $data['id'];
            //echo $id;
            //session_start();
            $_SESSION['uid'] = $id;
            header('location: admin/admindash.php');
        }
    }
?>