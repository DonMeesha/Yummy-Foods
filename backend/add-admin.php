<?php include("include/menu.php"); ?>

<div class="main-content">
    <div class="wrapper">
        <h1 style="color:#FEE715FF;">Add Admin</h1>
<br><br>

    <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add']; // displaying session message
            unset($_SESSION['add']); // removing session message
        }
    ?>
                <br><br><br>
        <form action="" method="POST">

        <table class="tbl-30">
            <tr>
                <td style="color:white;">Full Name</td>
                <td><input type="text" name="full_name" placeholder="Enter Your Full Name"></td>
            </tr>
            <tr>
                <td style="color:white;">Username</td>
                <td><input type="text" name="username" placeholder="Your userName"></td>
            </tr>
            <tr>
                <td style="color:white;">Password</td>
                <td><input type="password" name="password" placeholder="Your Password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" id="" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>


<?php
include("include/footer.php");
?> 

<?php


if(isset($_POST['submit']))
{
    //button clicked
    //echo "button clicked";

    // 01. get the data from 
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // password encryption with md5

    //02. SQL Query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
    full_name = '$full_name',
    username = '$username',
    password = '$password'
    ";

    //03. executing query and saving data into database    
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //04. Check whether the data is insertedornot and display apporiate message
    if($res==TRUE)
    {
        //data inserted
        //echo "data inserted";
        //create a session variable to diplay message
        $_SESSION['add'] = "<div class='success'>Admin Added Successfully!</div>";
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else{
        //failed to insert data
        //echo "data is not inserted";
        //create a session variable to diplay message
        $_SESSION['add'] = "<div class='error'>Failed to Add Admin!</div>";
        header("location:".SITEURL.'admin/add-admin.php');
    }

}


?>