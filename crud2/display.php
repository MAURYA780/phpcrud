<html>
    <head>
        <title>display</title>
    </head>
    <style>
        body{
            background-color: aquamarine;
        }
        table{
            background-color: white;
        }
        .sbtn,.dbtn
        {
            background-color: green;
            color: white;
            font-weight: bold;
            font-size: 15px;
            border: 0px;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
            
        }
        .dbtn{
            background-color: red;
        }
    </style>
</html>

<?php
include('connection.php');

$query="SELECT * FROM form";

$data=mysqli_query($conn,$query);
$count=mysqli_num_rows($data);

// echo $count;
if($count !=0){
    // echo "database has records";

    ?>   
        <center>
        <h2><mark>Display Records</mark></h2>
        <table border="2px" width="90%">
            <tr align="center">
                <td width="5%">Id</td>
                <td width="15%">FirstName</td>
                <td width="15%">LastName</td>                
                <td width="10%">Email</td>
                <td width="10%">Phone</td>
                <td width="5%">Gender</td>
                <td width="15%">Address</td>
                <td width="15%">Operations</td>
            </tr>       
    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
       echo " <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['fname']."</td>
                    <td>".$result['lname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['gender']."</td>
                    <td>".$result['address']."</td> 
                    <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='sbtn'></a>
                    <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='dbtn' onclick = return 'checkdelete()'></a>
                    </td>
                                     

                </tr>";
    }

    
}
else
{
    echo "records not found";
}
?>
</table>
</center>

<script>
    function checkdelete()
    {
        return Confirm('Are u sure you want to delete this record');
    }
</script>
