<?php

    if(!$isLoggedIn) {


    $formLog = ' 
    <form method="post" class="row p-5 mt-5 border rounded ">
    <input class="col-form-label mt-4 form-control" type="password" name="password" placeholder="password" />
    <input  type="submit" value="validate" class="btn btn-secondary justify-content-center mt-3
    " />
  </form>';
    } else {
        $formLog = ' 
        
<form method="post" action="index.php">
<input  type="submit" name="logout" value="Logout" class="btn btn-secondary justify-content-center mt-3
" /> </form>
        
        ';
    
    }

   



?>


