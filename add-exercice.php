<?php


require("../header.php");


        if(isLogged()) {
   
    if ($user->getUserType() == 1)
     {

         if(isset($_POST["postExercice"])&& $_POST["postExercice"] == "111")

        {
                
        $type = 1;
        $groupNumber = $_POST['group_number'];
        $title = $_POST['title'];
        $published = $_POST['published'];
        $format = $_POST['format'];
        $creator = $_POST['creator'];
        $held = $_POST['held'];
        $myUsage = $_POST['myUsage'];
        $shelfmark = $_POST['shelfmark'];
        $description = $_POST['Description'];
        $image = $_POST['image'];
        $video1 = $_POST['video1'];
        $video2 = $_POST['video2'];

       if ($user->getGroupNumber() != $groupNumber)
        {

                $message = new Alert("danger", true);
                $message->addText('The group Number is incorrect. Please enter your group Number');
                $message->messageToSession();
                header("Location: ../index.php");


        }
        

        $q = $db->prepare('SELECT exerciceType FROM exercices WHERE groupNumber= :groupNumber');
                                  
        $q->execute(array(

            'groupNumber' => $groupNumber
            
            
        ));
        $nbr=$q->rowCount();

        

        if($nbr==0)
            {
        

        $newExerciceArray = Exercice::returnDataArrayFromData($groupNumber, $type, $title, $published, $format, $creator,$held, $myUsage, $shelfmark, $description,$image, $video1, $video2);
        $newExercice = new Exercice($newExerciceArray);
       

        

        $exerciceManager = new ExerciceManager($db);
        $exerciceManager->createStudent($newExercice);

        
        $message = new Alert("success", true);
        $message->addText('project successfuly sent to Admin. Waiting for verification. ');
        $message->messageToSession();
          header('Location: ../index.php');
        
             }
        
     
        else 
        {
             $message = new Alert("danger", true);
                $message->addText('Sorry but a project has already been submitted for this group');
                $message->messageToSession();
                header("Location: ../index.php");
            
        }
    }
}
}


        
       

