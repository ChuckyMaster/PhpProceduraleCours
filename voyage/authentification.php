<?php 

$isLoggedIn = false;


$users = [
[
"id" => 1,
"username" => "patate",
"pwd" => "andouille"
],
[
    "id" => 2,
"username" => "Lucy",
"pwd" => "croissant"
],
[
    "id" => 3,
"username" => "doliprane",
"pwd" => "maldecrane"
],
[
    "id" => 4,
"username" => "nurofen",
"pwd" => "sanspeine"
],
[
    "id" => 5,
"username" => "fromage",
"pwd" => "raclette"
]

];


//  VERIF CONNECTION

if(isset($_POST['username']) && isset($_POST['password'])){
    $pwdInput = $_POST['password'];
    $userInput = $_POST['username'];
    foreach($users as $user) {

        if($userInput == $user['username'] && $pwdInput == $user['pwd']) {
    
            $isLoggedIn = true;
            $_SESSION['isConnect'] = true;
         
            echo "BIEN CONNECTÉ";
    
    };
    
};
};

  

if(isset($_SESSION['isConnect']) && $_SESSION['isConnect']) {
    $isLoggedIn = true;
}


if(isset($_POST['logout']) ) {
    unset($_SESSION['isConnect']);
    $isLoggedIn = false;
    echo "DECONNECTÉ";
}

?>








