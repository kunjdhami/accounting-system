<?php
    session_start();

    if(isset($_SESSION['uid'])){
        //echo $_SESSION['uid'];
        
        /* ENABLE IT TO SEE BALANCE OF ADMIN ANYTIME

        $id = $_SESSION['uid'];
        include('../dbcon.php');
        $qry = "SELECT * FROM `admin` WHERE `id` = '$id'";
        $run = mysqli_query($con, $qry);
        $row = mysqli_num_rows($run);

        $data = mysqli_fetch_assoc($run);

        $bal = $data['balance'];

        echo "balance is".$bal;
        */
    }else{
        //echo "error";
        header('location: ../index.php');
    }
?>

<?php
    include('header.php');
?>
    <nav class="navbar navbar-light" style="background-color: #8ac3d1;">

    <!--    <a class="btn btn-outline-danger my-2 my-sm-0 " 
            data-toggle="modal" data-html="true"
            title="Admin Login" href=""
            data-target="#loginModal"> 
        Admin Login</a>
    -->    
        <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0 mr-auto">Home</a>
        <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0 ml-auto">logout</a>
        <?php //echo $_SESSION['uid']; ?>
    </nav>
<!--
    <div align="center" class="admintitle">
        <h4><a href="logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 20px;">logout</a></h4>
        <h1>Admin dashboard</h1>
    </div>
-->
    <header class="jumbotron" style="background: rgb(86, 89, 92);">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="color: white;">Admin Dashboard</h1>
                </div>
                <div class="col-12 col-sm align-self-center">
                </div>
            </div>
        </div>
    </header>

<!--
    <div class="dashboard" style="height: 190px;">
        <table width="35%" align="center">
            <tr>
                <td>1.</td><td><a href="income.php">Income</a></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="outgo.php">Outgo</a></td>
            </tr>
            <tr>
                <td>3.</td><td><a href="update.php">Update</a></td>
            </tr>
            <tr>
                <td>4.</td><td><a href="balance.php">Check balance and view remaining</a></td>
            </tr>
        </table>
    </div>
-->
    <div class="container">
        <table class="table table-hover">
            <tbody class="row justify-content-md-center">
                <tr class="col-sm-7" align="center">
                    <th scope="row">1</th>
                    <td><a href="income.php">Income</a></td>
                </tr>
                <tr class="col-sm-7" align="center">
                    <th scope="row">2</th>
                    <td><a href="outgo.php">Outgo</a></td>
                </tr>
                <tr class="col-sm-7" align="center">
                    <th scope="row">3</th>
                    <td><a href="update.php">Update</a></td>
                </tr>
                <tr class="col-sm-7" align="center">
                    <th scope="row">4</th>
                    <td><a href="balance.php">Check Balance</a></td>
                </tr>
                <tr class="col-sm-7" align="center">
                    <th scope="row">5</th>
                    <td><a href="viewdetails.php">View Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>