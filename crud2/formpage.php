<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormPage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">

        <div class="rf">
            <div>
                <h2>Registration Form</h2>
            </div>

            <div>
                <label for="">Fname</label>
                <input type="text" name="fname" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Lname</label>
                <input type="text" name="lname" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Password</label>
                <input type="text" name="password" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">ConPassword</label>
                <input type="text" name="cpwd" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Gender</label>
                <select name="gender" id="">  
                    <option value="not_selected">Select</option>                  
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select> <br><br>
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Phone</label>
                <input type="number" name="phone" class="input_field" required=""><br><br>
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" rows="3" required=""></textarea><br><br>
            </div>

            <div>
                <label for=""></label>
                <input type="submit" name="register" value="Register">
            </div>
        </div>
    </form>
</body>
</html>

<?php
if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pwd=$_POST['password'];
    $cpwd=$_POST['cpwd'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $query="insert into form(fname,lname,password,conpassword,gender,email,phone,address) 
    values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";

    $data=mysqli_query($conn,$query);

    if($data){
        echo "data inserted successfully";
    }
    else{
    echo "failed";
    }

}

?>