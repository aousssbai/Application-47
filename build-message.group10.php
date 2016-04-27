<?php


include("header.php");



if(isLogged())

{
    
     
    
        createPage("message.group10");
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