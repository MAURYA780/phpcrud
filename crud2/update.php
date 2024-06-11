<?php
include('connection.php');

 $id=$_GET['id'];

$query="SELECT * FROM form where id='$id'";

$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdatePage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">

        <div class="rf">
            <div><h2 aling_item="center">Update the Details</h2></div>

            <div>
                <label for="">Fname</label>
                <input type="text" name="fname" value="<?php echo $result['fname'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Lname</label>
                <input type="text" name="lname" value="<?php echo $result['lname'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password" value="<?php echo $result['password'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">ConPassword</label>
                <input type="text" name="cpwd" value="<?php echo $result['conpassword'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Gender</label>
                <select name="gender" id="">  
                    <option value="not_selected">Select</option>                  
                    <option value="male" 
                        <?php 
                            if($result['gender']=='male')
                            {
                                echo "selected";
                                }
                        ?>
                    >
                    Male</option>
                    <option value="female"
                    <?php 
                            if($result['gender']=='female')
                            {
                                echo "selected";
                                }
                        ?>
                    >Female</option>
                    <option value="other">other</option>
                </select> <br><br>
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $result['email'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Phone</label>
                <input type="number" name="phone" value="<?php echo $result['phone'];?>" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address"  id="" rows="3" required=""> <?php echo $result['address'];?>
                </textarea><br><br>
            </div>

            <div>
                <label for=""></label>
                <input type="submit" name="update" value="Update">
            </div>
        </div>
    </form>
</body>
</html>

<?php
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pwd=$_POST['password'];
    $cpwd=$_POST['cpwd'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    // $query="insert into form(fname,lname,password,conpassword,gender,email,phone,address) 
    // values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";

    
    $query="update form set fname='$fname',lname='$lname',password='$pwd',conpassword='$cpwd',gender='$gender',email='$email',phone='$phone',address='$address' where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('data updated successfully')</script>";
        ?>
        <meta http-equiv="refresh" content="0; URL=http://localhost/crud2/display.php" />

        <?php
    }
    else{
    echo "updatation failed";
    }

}

?>
