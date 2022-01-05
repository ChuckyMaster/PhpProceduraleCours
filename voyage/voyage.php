
<?php 

  require_once 'logique.php';


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
      href="https://bootswatch.com/5/quartz/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    
    

    <title>Travel the World</title>
  </head>
  <body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="index.php">Travel</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarColor03"
          aria-controls="navbarColor03"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#"
                >Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Voyages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destination</a>
            </li>
            
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-sm-2"
              type="text"
              placeholder="Search"
            />
            <button type="button" class="btn btn-primary">Search</button>
          </form>
        </div>

        <!-- fin container fluid -->
      </div>
    </nav>

    <!-- FIN NAV -->

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <!-- PARTIE FORM  -->
        <div class="col-6 main-left d-flex">
          <div class="container border m-3 d-flex justify-content-center">
            <div class="row d-flex ">
              <div class="col-12 d-flex  ">

              <!-- debut balise form method post -->
              <?php if($isLoggedIn) { ?>

                   <!-- LOGOUT  -->
                   <form method="post" class="form-group justify-content-center text-center ">
              <button class="btn btn-info" name="logout"> Logout</button>
                </form>



                <?php } else{ ?>

                  <form action="" method="post" 
                class="justify-content-center text-center ">
                  <div class="form-group ">
                    <label class="form-label mt-4">Login</label>
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control"
                       name="username"
                      />
                      <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                      <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="floatingPassword"
                        placeholder="Password"
                      />
                      <label for="floatingPassword">Password</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-dark m-2"> Log </button>

                </form>

                  <?php  } ?>
                
              
              </div>
            </div>
          </div>
        </div>

        

        <!-- 
        PARTIE AFFICHAGE DROITE -->
        <div class="col-6 main-right">
          <div class="container border m-3">
            <div class="row d-flex">
              <div class="col-12 justify-content-center">
                <h2 class="m-5 text-secondary justify-content-center text-center">
              Travel all around the world
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- AFFICHAGE PRINCIPALE -->

    <div class="container">
      <div class="row">
        <div class="col-12 d-flex m-auto">
          <!-- CONTIENT TOUTES LES CARDS -->
          <div class="cards row m-5 d-flex justify-content-center flex-row">
          
              <!-- une card -->




              <?php 

$voyage;
    if(isset($_GET['destination'])){
      foreach($voyages as $unVoyage)

      if($unVoyage['destination'] == $_GET['destination']){
        $voyage = $unVoyage;
      }
    }
           
              

              ?>
              <div class="card m-3" style="width: auto">
                  <img width="300px" src="<?= $voyage['image'] ?>" class="card-img-top mt-2" alt="..." />
                  <div class="card-body">
                    <h3 class="card-title"><?= $voyage['destination'] ?></h3>
                    <h4><?= $voyage['duree'] ?> jours</h4>
                    <h4>Pour <?= $voyage['personnes'] ?></h4>



                    <h4>Pour <?php 
                    if($isLoggedIn) {
                    echo  $voyage['prix'] * 0.8;
                    } else {
                        
                     echo $voyage['prix']  ;
                    }?>
                    
                     €</h4>
                    <p class="card-text">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias magnam corrupti saepe voluptatem et voluptatum!
                    </p>
                    <form  ><a href="voyage.php?destination=" class="btn btn-primary"  name=" <?=$voyage['destination'] ?>">Choose</a></form>
                    
                  </div>
                </div>
                <!-- fin d'une card -->
            

            
             



              
              


            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
