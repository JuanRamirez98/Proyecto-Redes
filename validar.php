<html>
  <head>
    <title>MI PAGINA IoT</title>
  </head>
  <body>
    <?php
    $l = $_POST["login"];
    $p = $_POST["pass"];

    if($l=="admin" && $p=="1234"){
        header("Location: pagina2.html"); 
    }
    else{
        header("Location: index.html"); 
    }

    ?>
  </body>
</html>