<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body style="background:#CCC;">
 
    <div class="container">
        <div class="row">
            <div>
                <div>
                    <div>
                        <h3>Entrance to my heart </h3>
                    </div>
 
                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
 
                    <div>
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder=" User Name">
                            <input type="password" name="Password" placeholder=" Password">
                            <button  name="Login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>
