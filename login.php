<?php
$username ='admin';
$password ='password';
 if ((isset($_POST['username']) &&!empty($_POST['username']))&&(isset($_POST['password']) &&!empty($_POST['password']))){
     if($_POST['username']==$username && $_POST['password']==$password){
        header('Location:index.php');  
     }else{
         echo "Error:Incorrect Username or Password";
     }
 }
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="loginstyle.css">
    </head>
<body>
   <form action="login.php" method="post">
      <div class="main">
             <div class=username>
            <label for="username">Username:</label>
            <input type="text" name="username" required/><br>
            </div>
              
            <div class=password>
            <label for="password">Password:</label>
            <input type="password" name="password" required /><br>
            </div>
            <input type="submit" name="submit" value="Login"/>
    
       </div>
    </form>      
</body>
</html>
