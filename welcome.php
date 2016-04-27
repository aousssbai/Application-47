<!DOCTYPE html>
<html>
<head>
<script src="3.js"></script>
<style>



div.button{
     position: absolute;
    top: 420px;
    right:820px;
    width: 20px;
    height: 100px;
    z-index: 3;
}



.img1::before {
    position:absolute;
    
   
}

div.img2{
    position:absolute;
   top:0px;
   right:0px;
    background: (100,100,100,0.5);
}

div.img3{
   
    position:absolute;
    right:0px;
    top: 287px;
    bottom : 0px;
    background: (100,100,100,0.5);
   
    background-image: url('IOE-library-system/img/b3.jpg') no-repeat;
   
} 


div.img4{
    position:absolute;
    bottom: 10px;
    right : 750px;
    
}

div.logo1{
    position: absolute;
    left:80px;
    top:500px;
    border: 2px;
    margin: 20px;
    z-index: 4;

}

div.logo2{
    position: absolute;
    left:150px;
    top:600px;
    border: 2px;
    margin: 20px;
    z-index: 4;

}
div.logo3{
    position: absolute;
    left:220px;
    top:600px;
    border: 2px;
    margin: 20px;
    z-index: 4;
}




</style>
</head>



<body>
<div class = "button">
     <a target="_blank" href="http://www.ucl.ac.uk/ioe/">
       <img src="IOE-library-system/img/aboutus.jpg" alt="1" width="70" onmousedown="mousedown();" onmouseover="this.src='IOE-library-system/AboutUs_button/aboutuso.png';" onmouseout="this.src='IOE-library-system/img/aboutus.jpg';">
   </a>
</div>



<div class="img1">
    <img src="IOE-library-system/img/b1.jpg" alt="1" width="2000" height="947">
  </a>
</div>

<div class="img2">
    <img src="IOE-library-system/img/b2.jpg" alt="2" width="500" height = "500">
  </a>
</div>

<div class="img3">
   <a  target="_blank" href="index.php">
<img src='IOE-library-system/img/b3.jpg' width='750' height='517' onmouseover="this.src='IOE-library-system/img/b32.jpg';" onmouseout="this.src='IOE-library-system/img/b3.jpg';" onmousedown="mousedown();"/>
  </a>
</div>

<div class="img4">
    <img src="IOE-library-system/img/b4.jpg" alt="4" width="800" height="400">
  </a>
</div>


</div>


<body>
<html>