<?php


require("../header.php");



if(isLogged()) {
    
    if ($user->getUserType() == 2) {

         if(isset($_POST["postExercice"]))

        {
                
        $type = 2;
        $groupNumber = $_POST['group_number'];

            $texts = "Your project is published on the homepage";
            $date= date("d/m/Y");
            $time=date("H:i");

        $q = $db->prepare("UPDATE exercices
                                  SET exerciceType= :type
                                  WHERE groupNumber= :numbers");

        $q->execute(array(

            'numbers' => $groupNumber,
            'type' => $type
            
            
        ));
        
        

        
        $q = $db->prepare('INSERT INTO mailbox (groupNumber, texts, dates, times)
                                  VALUES (:groupNumber, :texts, :dates, :times )');
        $q->execute(array(

            'groupNumber' => $groupNumber,
            'texts' => $texts, 
            'dates' => $date,
            'times'=> $time
            ));

        
                 $message = new Alert("success", true);
                 $message->addText('project successfuly published on the homepage.');
                 $message->messageToSession();
                 header('Location: ../index.php');


        }
     
        else 
        {
             $message = new Alert("danger", true);
                $message->addText('oops, we encountered a problem while reading your project. Please try again');
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
        }
    }
}

