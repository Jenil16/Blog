<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $exists=false;
    

        $sql = "Select * from bloggers where username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num==1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location:addblog.php");

        }
    }
    
    else{
        $showError = true;      
    }

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
        body{
            background-image:url("blog image4.jpg");
        }
            .container{
                background-color: #e1b984;
                width: fit-content;
                text-align: left;
                margin-top: 45px;
                margin-left:1400px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: fit-content;
                margin-top:50px ;
                border-radius:10px;
                height:65vh;
                width:18vw;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            }
            #loginBtn{
                margin-left:140px;
            }


    </style>
  </head>
  <body>
     
    
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
    </div> ';
    }
    if(!$showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Invalid Credentials.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container">
     <h1 class="text-center">Login</h1>
     <form action="/loginsystem/login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        
     <button type="submit" class="btn btn-primary" id="loginBtn" >Login</button>
     </form>
     <br>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
