<?php





$isLoggedIn = false;
$pwd = "jeanjeantarzan";


if(isset($_POST['logout'])) {
    unset($_SESSION['isConect']);
    $isLoggedIn = false;
};
if(isset($_SESSION['isConect']) && $_SESSION['isConect']
     
    ) {
        $isLoggedIn = true;
    } 
;


if(isset($_GET['coffee'])) {
//echo "wazaaaaa";
require_once 'coffee.php';
//var_dump($_GET);


} elseif (
    
    isset($_GET['tea']) ){
        require_once 'tea.php';
       
    } elseif ( isset($_GET['grog']))
{
    require_once 'grog.php';
} else {
        require_once 'question.php';
    };



if(isset($_POST['password'])) {
$pwdInput = $_POST['password'];

if($pwd == $pwdInput) {
    $isLoggedIn = true;
    $_SESSION['isConect'] = true;
    $_SESSION['password'] = $_POST['password'];

    echo "tarzan de la jungle mon vieux!";
}

}







?>