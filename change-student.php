<?php


require("../header.php");



if(isLogged()) {
    
    if ($user->getUserType() == 2) {

         if(isset($_POST["postExercice"]))

        {
                
        
        $new = $_POST['new'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $q = $db->prepare("UPDATE users
                                  SET groupNumber= :new
                                  WHERE firstName= :first AND lastName = :last");

        $q->execute(array(

            'new' => $new,
            'first' => $firstname,
            'last' => $lastname
            
            
        ));
        

        if ($q->rowCount()==0)
        {
                $message = new Alert("danger", true);
                $message->addText('The form does not match our records. Please try again ');
                $message->messageToSession();
                header("Location: change-student.php");
         }

             else {

                 $message = new Alert("success", true);
                 $message->addText('The student has been successfully affected to his new group');
                 $message->messageToSession();
                 header('Location: ../index.php');
            
                  }
        }
     
        else 
        {
             $message = new Alert("danger", true);
                $message->addText('The form does not match our records. Please try again ');
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
        }
    }
}
