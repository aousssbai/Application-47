<?php function my_autoload($class_name) {
    if (is_file('lib/' . $class_name . '.php')) {
        require_once 'lib/' . $class_name . '.php';
    } else if (is_file('manager/' . $class_name . '.php')) {
        require_once 'manager/' . $class_name . '.php';
    } elseif (is_file('../lib/' . $class_name . '.php')) {
        require_once 'lib/' . $class_name . '.php';
    }
    else if (is_file('../manager/' . $class_name . '.php')) {
            require_once 'manager/' . $class_name . '.php';
    }
}
spl_autoload_register("my_autoload");?>
<?php session_start();?>
<?php function createPage($pageName) {
    //Include Header & navbar
    include("views/modules/module.header.php");
    include("views/modules/module.navbar.php");

    include('views/view.'.$pageName.'.php');

    //include footer
    include("views/modules/module.footer.php");
}

function createExercicePage(Exercice $exercice) {
    //Include Header & navbar
    include("views/modules/module.header.php");
    include("views/modules/module.navbar.php");

    $exercice->displayPage();

    //include footer
    include("views/modules/module.footer.php");
}

function isLogged() {
    if(isset($_SESSION['user'])&&!empty($_SESSION['user'])&&$_SESSION['user'] instanceof User) {

        return true;
    } else {
        return false;
    }
}

if(isLogged()) {
    $user = $_SESSION['user'];
}

$dbFactory = new DBFactory();
$db = $dbFactory->getMysqlConnexionWithPDO();?>