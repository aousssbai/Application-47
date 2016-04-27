<?php



require("../header.php");


        if(isLogged()) {
   
    if ($user->getUserType() == 2)
     {


        
if(isset($_POST["postExercice"])&& $_POST["postExercice"] == "111")

        {
                
        
        $groupNumber = $_POST['groupNumber'];
        $texts = $_POST['message'];
        $date= date("d/m/Y");
        $time=date("H:i");
        
        $q = $db->prepare('INSERT INTO mailbox (groupNumber, texts, dates, times)
                                  VALUES (:groupNumber, :texts, :dates, :times )');
        $q->execute(array(

            'groupNumber' => $groupNumber,
            'texts' => $texts, 
            'dates' => $date,
            'times'=> $time

           
            
            
        ));

            $qs = $db->prepare('DELETE FROM exercices WHERE groupNumber= :group' );

            $qs->execute(array(

            'group' => $groupNumber
        ));

        $message = new Alert("success", true);
                 $message->addText('Your Comment has been successfully sent. The project will be modified by the group');
                 $message->messageToSession();
                header('Location: ../index.php');
             }

            else {


$message = new Alert("danger", true);
                 $message->addText('An error occurred. Please try again.');
                 $message->messageToSession();
                 header('Location: ../index.php');




             }

        }
        

       
        
    }
 
        
       

        ?>








