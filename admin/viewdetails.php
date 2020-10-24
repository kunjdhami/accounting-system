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
                    <h2>View Details</h2>
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
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>1.&nbsp; &nbsp;</span><a href="income.php">Income</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>2.&nbsp; &nbsp;</span><a href="outgo.php">Outgo</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>3.&nbsp; &nbsp;</span><a href="update.php">Update</a></li>
                        <li class="list-group-item" align="center" style="background: rgb(86, 89, 92);"><span>4.&nbsp; &nbsp;</span><a href="balance.php">Check Balance</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
<div class="container-fluid" style="background:;">
    <form method="post" action="viewdetails.php">
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Enter Name:</label>
            
            <div class="col-sm-3 ml-2" style="background:">
            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Enter City:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="city" class="form-control" id="inputPassword3" placeholder="Enter City" required>
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

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $city = $_POST['city'];

        include('../dbcon.php');
        include('../function.php');

        showdetails($name, $city);
    }
?>