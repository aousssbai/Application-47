
<html>
<div class="container">

    <?php

        Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);  

 ?>

    
<head>
  <script src="IOE-library-system/3.js"></script>
<style>


div.button{
    position: absolute;
    top: 270px;
    left:1240px;

    width: 30px;
    height: 100px;
}

div.img1 {
    position:relative;
    left:30px;
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}


div.img1:hover {
    border: 1px solid #777;
}

div.img1 img {
    width: 100%;

 /*   height: 100%;*/
}

div.desc {
    padding: 15px;
    text-align: center;
}


</style>
</head>
<body>

<div class = "button">
     <a target="_blank" href="welcome.php" >
       <img src="IOE-library-system/img/home.png" alt="1" width="50" onmousedown="mousedown();">
   </a>
</div>

<div class="head center-block">
   <img class="center-block img-responsive" src="IOE-library-system/img/head.jpg" alt="1" width = "1400" height = "200">
<br>
   
</div> 
<?php
$exercices1 = $exerciceManager->getListUnchecked1();
$count=0;
if($exercices1==null)
{

}
 else {

  $image1 = $exercices1->displayTitledit1();
$count=$count+1;
 }





$exercices2 = $exerciceManager->getListUnchecked2();

if($exercices2==null)
{

}
 else {$image2 = $exercices2->displayTitledit2();
 $count=$count+1;}





$exercices3 = $exerciceManager->getListUnchecked3();

if($exercices3==null)
{

}
 else {$image3 = $exercices3->displayTitledit3();
 $count=$count+1;}





$exercices4 = $exerciceManager->getListUnchecked4();

if($exercices4==null)
{

}
 else {$image4 = $exercices4->displayTitledit4();
 $count=$count+1;}




$exercices5 = $exerciceManager->getListUnchecked5();

if($exercices5==null)
{

}
 else {$image5 = $exercices5->displayTitledit5();
 $count=$count+1;}





$exercices6 = $exerciceManager->getListUnchecked6();

if($exercices6==null)
{

}
 else {$image6 = $exercices6->displayTitledit6();
 $count=$count+1;}





$exercices7 = $exerciceManager->getListUnchecked7();

if($exercices7==null)
{

}
 else {$image7 = $exercices7->displayTitledit7();
 $count=$count+1;}





$exercices8 = $exerciceManager->getListUnchecked8();

if($exercices8==null)
{

}
 else {$image8 = $exercices8->displayTitledit8();
 $count=$count+1;}





$exercices9 = $exerciceManager->getListUnchecked9();

if($exercices9==null)
{

}
 else {$image9 = $exercices9->displayTitledit9();
 $count=$count+1;}





$exercices10 = $exerciceManager->getListUnchecked10();

if($exercices10==null)
{

}
 else {$image10 = $exercices10->displayTitledit10();
 $count=$count+1;}





$exercices11 = $exerciceManager->getListUnchecked11();

if($exercices11==null)
{

}
 else {$image11= $exercices11->displayTitledit11();
 $count=$count+1;}





$exercices12 = $exerciceManager->getListUnchecked12();

if($exercices12==null)
{

}
 else {$image12 = $exercices12->displayTitledit12();
 $count=$count+1;}




$exercices13 = $exerciceManager->getListUnchecked13();

if($exercices13==null)
{

}
 else {$image13 = $exercices13->displayTitledit13();
 $count=$count+1;}

if ($count==0)
{
  $page = "<br><h4>There is currently no project to edit</h4>";
  echo $page;
}


?>
</div>

  



</div>
</html>
