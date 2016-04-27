<?php

require("../header.php");



if(isLogged()) {
    
    if ($user->getUserType() == 2) {

if(isset($_POST["postExercice"])&& $_POST["postExercice"] == "111")
{
            
            $groupNumber = $_POST['groupNumber'];
            $texts = "An administrator deleted your project";
            $date= date("d/m/Y");
            $time=date("H:i");

            $q = $db->prepare('DELETE FROM exercices WHERE groupNumber=:groupNumber' );
                                  
        $q->execute(array(

            'groupNumber' => $groupNumber
               
            
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
                $message->addText('The project has been successfully deleted. A message has been sent to the group');
                $message->messageToSession();

            } 

            else {
                $message = new Alert("danger", true);
                $message->addText('Exercice could not be deleted');
                $message->messageToSession();

            }

            header("Location: ../index.php");
            exit();
        }

    }



header("Location: ../index.php");
exit();