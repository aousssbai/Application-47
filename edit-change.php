<?php


include("header.php");



if(isLogged())

{
    
    if ($user->getUserType()==2) 
    {
        createPage("home.admin.exercice.edit");
    } 

else 
    	{

    		$message = new Alert("danger", true);
                $message->addText("you do not have the right to edit a project");
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
    	}
}

?>