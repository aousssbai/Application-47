<html>
<div class="container">

  

<?php
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $messageManager = new MessageManager($db);

        ?>
       




<h2 class="text-center"> Messages for Group 8</h2>




    </br>
    
    <body>
    

    

<?php
        $messages = $messageManager->getMessage8();
?>




</body>
</html>
