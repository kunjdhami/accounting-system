<?php
    session_start();

    if(isset($_SESSION['uid'])){
        //echo $_SESSION['uid'];
    }else{
        //echo "error";
        header('location: ../index.php');
    }
?>

<?php
    include('header.php');
    include('titlehead.php');
?>

<header class="jumbotron my-" style="background: rgb(86, 89, 92);">
        <div class="container my-0">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="color: white;">Admin Dashboard</h1>
                    <h2>Income</h2>
                </div>
                <div class="col-12 col-sm align-self-center">
        <!--            <table class="table table-hover">
                        <tbody class="row justify-content-md-center">
                            <tr class="col-sm-7" align="center">
                                <th scope="row">1</th>
                                <td><a href="outgo.php">Outgo</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">2</th>
                                <td><a href="update.php">Update</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">3</th>
                                <td><a href="balance.php">Check Balance</a></td>
                            </tr>
                            <tr class="col-sm-7" align="center">
                                <th scope="row">4</th>
                                <td><a href="viewdetails.php">View Details</a></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <ul class="list-group list-group-flush" style="background: rgb(86, 89, 92);">
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>1.&nbsp; &nbsp;</span><a href="outgo.php">Outgo</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>2.&nbsp; &nbsp;</span><a href="update.php">Update</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>3.&nbsp; &nbsp;</span><a href="balance.php">Check Balance</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>4.&nbsp; &nbsp;</span><a href="viewdetails.php">View Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
<!--
<form method="post" action="income.php" enctype="multipart/form-data">
    <table align="center" style="width: 50%; margin-top: 40px;">
        <tr>
            <th>Name: </th>
            <td><input type="text" name="name" placeholder="enter name" required></td>
        </tr>
        <tr>
            <th>Issue: </th>
            <td><input type="text" name="issue" placeholder="issue like Affi/karar" required></td>
        </tr>
        <tr>
            <th>City: </th>
            <td><input type="text" name="city" placeholder="enter city" required></td>
        </tr>
        <tr>
            <th>Date: </th>
            <td><input type="date" name="date" required></td>
        </tr>
        <tr>
            <th>Mobile No: </th>
            <td><input type="text" name="conno" placeholder="enter contact No" required></td>
        </tr>
        <tr>
            <th>Status: </th>
            <td>
            <select name="status" required>
                    <option value="clear">clear</option>
                    <option value="remaining">remaining</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Amount: </th>
            <td><input type="text" name="amount" placeholder="enter amount" required></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
-->
<div class="container">
    <form method="post" action="income.php" enctype="multipart/form-data">
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Name:</label>
            <div class="col-sm-3 ml-2" style="background:">
            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Issue:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="issue" class="form-control" id="inputPassword3" placeholder="Enter issue like affi/karar" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">City:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="city" class="form-control" id="inputPassword3" placeholder="Enter city" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Date:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="date" name="date" class="form-control" id="inputPassword3" placeholder="Enter date" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Mobile No:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="conno" class="form-control" id="inputPassword3" placeholder="Enter mobile no" required>
            </div>
        </div>        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Status:</label>
            
            <div class="col-sm-3 ml-2">
                <select class="form-control" name="status" id="sel1" required>
                    <option value="clear">clear</option>
                    <option value="remaining">remaining</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Amount:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="amount" class="form-control" id="inputPassword3" placeholder="Enter amount" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <div class="col-sm-auto ml-2" style="background:">
            <td colspan="2" align="center"><input class="btn btn-dark" type="submit" name="submit" value="submit"></td>
            </div>
        </div>
    </form>
</div>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        
        include('../dbcon.php');
        $name = $_POST['name'];
        $issue = $_POST['issue'];
        $city = $_POST['city'];
        $date = $_POST['date'];
        $conno = $_POST['conno'];
        $status = $_POST['status'];
        $amount = $_POST['amount'];
        //$imagename = $_FILES['simg']['name'];
        //$tempname = $_FILES['simg']['tmp_name'];
        //move_uploaded_file($tempname,"../dataimg/$imagename")
/*
        echo $name."<br>";
        echo $issue."<br>";
        echo $city."<br>";
        echo $date."<br>";
        echo $conno."<br>";
        echo $status."<br>";
        echo $amount;
*/      
        //$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `std`) VALUES ('$rollno','$name','$city','$pcon','$std')";
        $qry = "INSERT INTO `people`(`name`, `issue`, `city`, `date`, `conno`, `status`, `amount`) VALUES ('$name','$issue','$city','$date','$conno','$status','$amount')";

        $run = mysqli_query($con,$qry);
        //echo $run;
        if($run == true){
            ?>
                <script>
                    alert('data inserted');
                    //window.open('admindash.php','_self');
                </script>
            <?php
        }

        if($status == 'clear'){
            $id = $_SESSION['uid'];

            $qry = "SELECT * FROM `admin` WHERE `id` = '$id'";
            $run = mysqli_query($con, $qry);
            $row = mysqli_num_rows($run);

            $data = mysqli_fetch_assoc($run);
            $bal = $data['balance'];

            $bal = $bal + $amount;

            $qry2 = "UPDATE `admin` SET `balance`= '$bal' WHERE `id` = '$id'";
            $run2 = mysqli_query($con, $qry2);
            //$row2 = mysqli_num_rows($run2);
            
            //$bal = $data['balance'];
            //echo $bal;

        /*    $qry3 = "SELECT * FROM `admin` WHERE `id` = '$id'";
            $run3 = mysqli_query($con, $qry3);
            $row3 = mysqli_num_rows($run3);

            $data3 = mysqli_fetch_assoc($run3);
            $bal3 = $data['balance'];

            echo $bal3; */
            //echo "it is clear";
            
        }

        if($status == 'remaining'){
            // echo "it is rem";
        }

    }
?>