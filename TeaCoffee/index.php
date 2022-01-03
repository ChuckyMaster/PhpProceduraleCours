<?php
session_start();
require_once "logique.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/minty/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Tea or Coffee</title>
  </head>
  <body>
    <!-- NAV -->
    <nav class="container-fluid primary  navbar-dark bg-dark">
      <div class="container-xl">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-3 col-4">
            <a href="http://localhost/TeaCoffee/"> Tea Or Coffee</a>
          </div>
          <div class="col-lg-9 col-md-4 col-8 text-end">
            <ul class="d-flex m-3 justify-content-end">
              <li class="m-2"><a href=""> Tea</a></li>
              <li class="m-2" ><a href=""> Coffee </a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- fin nav -->

    <div class="container m-auto">
      <form class="row  p-5 mt-5 border rounded">
        <ul class="d-flex justify-content-between align-item-center m-auto w-auto">
          <li class="btn btn-warning m-3 ">
            <a href="http://localhost/TeaCoffee/?coffee" name="coffee">
              Coffee</a
            >
          </li>
          <li class="btn btn-danger m-3 ">
            <a href="http://localhost/TeaCoffee/?tea"> Tea</a>
          </li>

          <?php
          
          if($isLoggedIn) {
            
          
            echo '<li class="btn btn-danger m-3">
            <a href="http://localhost/TeaCoffee/?grog"> Grog</a></li>';

          }
          
          ?>

          
        </ul>
      </form>


      
     <?php 

     require_once 'loginLogout.php';
     
     
      echo $formLog ?>

      <div class="container">
        <div class="row d-flex">
          <div class="col-12   align-item-center">
            <?= $pageContent ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
