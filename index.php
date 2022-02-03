 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">  <script type="text/javascript" src="js/jquery.min.js"></script>

    <link href="/css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Log In </h2>
      <a href="signUp.php"><h2 class="inactive underlineHover">Sign Up </h2></a>
  
   
      <!-- Login Form -->
      <form method="POST" action="functions/login.php">
        <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" name = "submit" class="fadeIn fourth" value="Log In">
      </form>
  
      
  
    </div>
  </div>

</body>



</html>