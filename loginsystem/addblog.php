<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect1.php';
    $sid = $_POST["sid"];
    $sname = $_POST["sname"];
    $branch = $_POST["branch"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO `svit` (`sid`, `sname`, `branch`, `title`, `content`, `date`) VALUES ('$sid', '$sname', '$branch', '$title', '$content', current_timestamp())";
    
    $result = mysqli_query($con, $sql);
    
}  
?>



<!doctype html>
<html lang="en">
  <head>
      
      <title></title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Bootstrap CSS v5.0.2 -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
          .container{
            background-color: #e1b984;
            display: flex;
            flex-direction: column;
            border-radius:10px;

          }
          .form{
            display: flex;
         flex-direction: column;
            justify-content: center;
            align-items: flex-start;
          }
          .sid{
            display: flex;
           width: 56%;
           margin: 10px 0px;
          }

          .sidLabel{
              width:110px;
          }
          .sidLabelContent{
            width: -webkit-fill-available;
          }
          .text{
              border-radius:10px;
              margin-top:10px;
              margin-left:46px;
          }
          .text:focus{
              /* border: 2px solid indigo; */
          }
          .addBtn{
              margin-left:600px;
              margin-bottom:10px;
          }
      </style>
    </head>
    <body>

    <div class="container my-4">
     <h1 class="text-center">Add your blog here...</h1>
     <hr>
     <form action="/loginsystem/addblog.php" method="post">
         <div class="form">
     <div class="sid">
            <label for="username" class="sidLabel" width="110px">Student Id</label>
            <input type="text" class="form-control" id="sid" name="sid" aria-describedby="emailHelp">
            
        </div>
        <div class="sid">
            <label for="sname" class="sidLabel">Student name</label>
            <input type="text" class="form-control" id="sname" name="sname" aria-describedby="emailHelp">
            
        </div>
        <div class="sid">
            <label for="username" class="sidLabel">Branch</label>
            <input type="text" class="form-control" id="branch" name="branch" aria-describedby="emailHelp">
        </div>

        <div class="sid">
            <label for="username"class="sidLabel">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            
        </div>
        <div class="textarea">
            <label for="text"class="sidLabelContent">Content</label>
            <textarea name="content" id="content" class="text" cols="150" rows="8"></textarea>
        </div>
        <br>
         
        <button type="submit" class="btn btn-primary addBtn" id="">Add blog</button>
     </form>
        </div>
    </div><br>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>