<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect2.php';
    $email=$_POST["email"];
    $comment=$_POST["comment"];

    $sql = "INSERT INTO `feedback` (`email`, `comment`, `dt`) VALUES ('$email', '$comment', current_timestamp())";
    $result=mysqli_query($coni, $sql);

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image:url("blog image4.jpg");
        }
            .containerTwo{
                background-color: #e1b984;
                width: fit-content;
                text-align: left;
                margin-top: 45px;
                margin-left:1000px;
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
            .submitBtn{
                margin-left:100px;
                background-color:blue;
            }


    </style>
  </head>
  <body>
      <div class="container">

          <form action="/loginsystem/feedback.php" method="post">
              <div class="containerTwo">
                  <section class="text-antiquewhite-900 body-font relative">
                      <div class="container px-5 py-5 mx-auto flex">
                          <div class="feedbackBox">
                              <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                            <p class="leading-relaxed mb-5 text-gray-600">Your feedback is valueable to us</p>
                            <div class="relative mb-4">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="relative mb-4">
                                    <label for="message" class="leading-7 text-sm text-gray-600">Feedback</label>
                                <textarea id="message" name="comment"
                                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                            <button
                            class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg submitBtn" name="submit" id="submitbtn">Submit</button>
                            <p class="text-xs text-gray-500 mt-3">Thank you for feedback.We will surely works on this
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
</form>
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
