<?php
    session_start();

    if(isset($_SESSION['uid'])){
        //echo $_SESSION['uid'];
    }else{
        //echo "error";
        header('location: ../login.php');
    }
?>

<?php
    include('header.php');
    include('titlehead.php');
    include('../dbcon.php');

    $sid = $_GET['sid'];

    $sql = "SELECT * FROM `people` WHERE `id` = '$sid'";
    $run = mysqli_query($con, $sql);

    $data = mysqli_fetch_assoc($run);

    //print_r($data);
    // echo $data['name'];
?>
<!--
<form method="post" action="updatedta.php" enctype="multipart/form-data">
    <table align="center" style="width: 50%; margin-top: 40px;">
        <tr>
            <th>Name: </th>
            <td><input type="text" name="name" value='<?php echo $data['name']; ?>' required></td>
        </tr>
        <tr>
            <th>Issue: </th>
            <td><input type="text" name="issue" value=<?php echo $data['issue']; ?> required></td>
        </tr>
        <tr>
            <th>City: </th>
            <td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
        </tr>
        <tr>
            <th>Date: </th>
            <td><input type="text" name="date" value=<?php echo $data['date']; ?> required></td>
        </tr>
        <tr>
            <th>Contact number: </th>
            <td><input type="text" name="conno" value=<?php echo $data['conno']; ?> required></td>
        </tr>
        <tr>
            <th>Status: </th>
            <td>
            <select name="status" required>
                    <option value="remaining">remaining</option>
                    <option value="clear">clear</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Amount: </th>
            <td><input type="text" name="amount" value=<?php echo $data['amount']; ?> required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"  />
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
-->

<div class="container my-3">
    <form method="post" action="updatedta.php" enctype="multipart/form-data">
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Name:</label>
            <div class="col-sm-3 ml-2" style="background:">
            <input type="text" name="name" class="form-control" id="inputEmail3" value='<?php echo $data['name']; ?>' required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Issue:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="issue" class="form-control" id="inputPassword3" value=<?php echo $data['issue']; ?> required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">City:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="city" class="form-control" id="inputPassword3" value=<?php echo $data['city']; ?> required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Date:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="date" name="date" class="form-control" id="inputPassword3" value=<?php echo $data['date']; ?> required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Mobile No:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="conno" class="form-control" id="inputPassword3" value=<?php echo $data['conno']; ?> required>
            </div>
        </div>        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Status:</label>
            
            <div class="col-sm-3 ml-2">
                <select name="status" class="form-control" name="status" id="sel1">
                    <option value="remaining">remaining</option>
                    <option value="clear">clear</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <label class="ml-4 col-sm-1.5 col-form-label">Amount:</label>
            
            <div class="col-sm-3 ml-2">
            <input type="text" name="amount" class="form-control" id="inputPassword3" value=<?php echo $data['amount']; ?> required>
            </div>
        </div>
        <div class="form-group row justify-content-sm-center">
            <div class="col-sm-auto ml-2" style="background:">
            <td colspan="2" align="center">
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"  />
                <input class="btn btn-dark" type="submit" name="submit" value="submit">
            </td>
            </div>
        </div>
    </form>
</div>