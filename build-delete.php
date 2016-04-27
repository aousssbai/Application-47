<?php


include("header.php");



if(isLogged())

{
    
     if ( $user->getUserType()==2)
     {
    
        createPage("delete");
     }
     else 

     {

$message = new Alert("danger", true);
                $message->addText("Access restricted to Administrators");
                $message->messageToSession();
                header("Location: ../index.php");
            exit();

     }
}
     
    else 
    	{

    		$message = new Alert("danger", true);
                $message->addText("we could not find the page you are looking for");
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
    	}



?>