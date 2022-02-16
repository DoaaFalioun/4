<?php
  include("./connect_db.php");

  include("./functions.php");

  // var_dump($_POST); exit();

 
  $firstname = sanitize($_POST["firstname"]);
  $infix = sanitize($_POST["infix"]);
  $lastname = sanitize($_POST["lastname"]);
  $gender = sanitize($_POST["gender"]);
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);
  $databundle = sanitize($_POST["databundle"]);
  $SMS = sanitize($_POST["SMS"]);
  $accept = sanitize($_POST["accept"]);
 
  // Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel users
 $sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `gender`, `email`, `password`, `databundle`, `SMS`, `accept`) 
                      VALUES (NULL, '$firstname', '$infix', '$lastname', '$gender', '$email', '$password', '$databundle', '$SMS', '$accept');";

 // Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
 $result = mysqli_query($conn, $sql);

 if ($result)  {
  $success_or_fail = "Uw aanvrag is gelukt";
} else {
 $success_or_fail = "Uw aanvraag is niet gelukt";
}
 header("Refresh:4; url=./read.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <div class="alert alert-success" role="alert">
       <?php echo $success_or_fail; ?>
     </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   
  </body>
</html>

