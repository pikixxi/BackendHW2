
<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * FROM hw2 where name='".$_POST['UName']."' AND password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:welcom.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>