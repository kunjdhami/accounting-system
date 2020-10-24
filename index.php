<?php
                        session_start();
                        if(isset($_SESSION['uid'])){
                            header('location: admin/admindash.php');
                        }
                        else{
                            // header('location: ../index.php');
                        }
                    ?>


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
                                    //window.open('index.php','_self');
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

                    
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $city = $_POST['city'];

        include('dbcon.php');
        include('function.php');

        showdetails($name, $city);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-social.css">

</head>
<body>
<!--
    <h3 align="right" style="margin-right: 20px;">
        <a href="login.php">Admin login</a>
    </h3>
-->

<nav class="navbar navbar-light" style="background-color: #8ac3d1;">
        <a class="btn btn-outline-danger my-2 my-sm-0 ml-auto" 
            data-toggle="modal" data-html="true"
            title="Admin Login" href=""
            name="adminlog"
            onclick="admin()"
            data-target="#loginModal"> 
        Admin Login</a>
        <?php 
        //session_start();
        // echo $_SESSION['uid']; ?>
</nav>
    



    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog" role="content">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #8ac3d1;">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times; <!-- IT WILL DISPLAY CROSS IN MODALS HERE -->
                    </button>
                </div>
                <div class="modal-body">
                     <form method="post" action="index.php">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="exampleInputEmail3">Name</label>
                                    <input type="text" name="uname" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter name" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="login" class="btn btn-primary btn-sm ml-1" value="Login">        
                        </div>
                    </form>

                    

                </div>
            </div>
        </div>
    </div>

    
<!--
<form method="post" action="index.php" style="margin-top: 30px;">
    <table style="width:" align="center">
        <tr>
            <td colspan="2" align="center"><h3 style="margin-bottom: 30px;">People Info</h3></td>
        </tr>
        <tr>
            <td>Enter Name</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-dark" name="submit" value="show details"></td>
        </tr>
    </table>
</form>
-->

<!--
<form method="post" action="index.php">
    <div class="form-row">
        <div class="form-group col-sm-4">
                <label class="sr-only" class="form-control form-control-sm mr-1" for="exampleInputEmail3">People</label>
        </div>
        <div class="form-group col-sm-4">
            <label class="sr-only" for="exampleInputPassword3">Enter Name</label>
            <input type="text" name="name" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="enter name" required>
        </div>
        <div class="form-group col-sm-4">
            <label class="sr-only" for="exampleInputPassword3">City</label>
            <input type="text" name="city" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password" required>
        </div>
    </div>
    <div class="form-row">
        <input type="submit" name="submit" class="btn btn-primary btn-sm ml-1" value="Login">        
    </div>
</form>
-->

<div class="container-fluid" style="background:;">
    <h1 align="center" style="margin: 20px 20px 20px 20px;">Welcome</h1>
        
    <form method="post" action="index.php">
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Enter Name:</label>
            
            <div class="col-sm-3 ml-2" style="background:">
            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter Name">
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Enter City:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="city" class="form-control" id="inputPassword3" placeholder="Enter City">
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <div class="col-sm-auto ml-2" style="background:">
            <input type="submit" class="btn btn-dark" name="submit" value="show details">
            </div>
        </div>
    </form>
</div>


    <script src="bootstrap/jquery.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

</body>
</html>
