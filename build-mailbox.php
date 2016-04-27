<?php


include("header.php");



if(isLogged())

{


    $number = $user->getGroupNumber();
    
     if ( $user->getUserType()==1 )
     {
         if($number==1){
                  createPage("message.group1");
            } 
            if($number==2){
                  createPage("message.group2");
            }  
            if($number==3){
                  createPage("message.group3");
            }  
            if($number==4){
                  createPage("message.group4");
            }  
            if($number==5){
                  createPage("message.group5");
            }  
            if($number==6){
                  createPage("message.group6");
            }  
            if($number==7){
                  createPage("message.group7");
            }  
            if($number==8){
                  createPage("message.group8");
            }  
            if($number==9){
                  createPage("message.group9");
            }  
            if($number==10){
                  createPage("message.group10");
            }  
            if($number==11){
                  createPage("message.group11");
            }  
            if($number==12){
                  createPage("message.group12");
            }  
            if($number==13){
                  createPage("message.group13");
            }  

     }

     if ( $user->getUserType()==2 )
     {

       createpage("mailbox");

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