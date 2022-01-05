<?php


require_once 'logique.php'

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
      href="https://bootswatch.com/5/journal/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Message</title>
  </head>
  <body>
    <!-- DEBUT NAV -->

    <nav class="container-fluid primary navbar-dark bg-dark">
      <div class="container-xl">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-3 col-4 logo">
            <a href="#" class="logo"> MB</a>
          </div>
          <div class="col-lg-9 col-md-4 col-8 text-end">
            <ul class="d-flex m-3 justify-content-end">
              <li class="m-2">
                <a href="#" class="btn btn-outline-primary"> link 1 </a>
              </li>
              <li class="m-2">
                <a href="#" class="btn btn-outline-primary"> Link 2 </a>
              </li>
              <li class="m-2">
                <a href="#" class="btn btn-outline-primary"> Link 3 </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- FIN NAV -->

    <!-- HEADER BANNIERE EN TETE -->

    <!-- titre centré -->
    <header class="container-fluid bg-primary">
      <div class="row justify-content-center h-100">
        <div class="col-12 align-self-center">
          <h1 class="text-center main-title ">Messages</h1>
        </div>
      </div>
    </header>

    <!-- FIN HEADER -->

    <!-- MAIN CONTENT SPLIT EN 2 ( et ouai encore... j'aime bien) -->

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <!-- PARTIE FORM  -->
        <div class="col-6 main-left d-flex flex-column">
          <div class="container border m-3 d-flex justify-content-center">
            <div class="row d-flex">
              <div class="col-12 d-flex">
                <form action="" class="justify-content-center text-center">
                  <div class="form-group">
                    <label class="form-label justify-content-center mt-4"
                      >Login</label
                    >
                    <div class="form-floating mb-3">
                      <input
                        type="email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                      />
                      <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                      <input
                        type="password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                      />
                      <label for="floatingPassword">Password</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-light mt-3">Log</button>
                </form>
              </div>
            </div>
          </div>

          <!-- fin container form -->


          <!-- AUTEUR -->
          <div class="container auhtor mt-5"> 
            <div class="row">
              <div class="col-12"> 
              <div class="form-floating mb-3">
                      <input
                        
                        class="form-control"
                        id="floatingInput"
                        
                      />
                      <label for="floatingInput">Auteur</label>
                    </div>



              </div>
            </div>
          </div>
          <!-- ------------------------------------------------------------------------------- -->
           <!-- textarea -->
          <div class="container"> 
            <div class="row"> 
              <div class="col-12"> 
               
<div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Message</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div></div>
            </div>
          </div>
          
        </div>

        <!-- 
      PARTIE AFFICHAGE -->
        <div class="col-6 main-right bg-primary">
          <div class="container">
            <div class="row d-flex flex-column">
              <div class="col-12 mt-5  border justify-content-center">
                <h2 class="m-5 justify-content-center text-light text-center">
                  Liste de messages
                </h2>

                <!-- affichage d'un message -->


                <?php foreach($messages as $message) {?>

                  <div class="container border mb-5">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="mb-2"> <?=$message['author']?></h2>
                      <p>
                      <?=$message['message']?>
                      </p>
                    </div>
                  </div>
                </div>

                <!-- fin affichage message -->




           <?php     } ?>




              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
