
<!DOCTYPE html>
<html>
<head>
  <script src="3.js"></script>
<style>

div.scroll
{
    position: absolute;
    top:220px;
    left:145px;
    background-color:#C0C0C0; 
}

div.groupimg { 
    float: right;
    position: absolute;
    right: 250px;
    top:220px;
}


/*description below the picture
button position align with the edge of the head pic
description -->another element for description 
get the final version on google drive
mouse effect
art gallery*/

div.button{
    position: absolute;
    top: 220px;
    left:1234px;
    width: 20px;
    height: 100px;
}





</style>
</head>



<body>



<div class="head">
   <center> <img src="img/head.jpg" alt="1" width = "1150" height = "200"></center>
  </a>
</div> 

<div class = "groupimg">
   <img src="img/1.jpg" alt="1" width="700" height="700">
</div> 


<div class= "scroll">
<div class="form-group">
            <label for="group number">Group number:</label>
            <input type="text" class="form-control" placeholder="Group number" name="group_number" required>
        </div>

        <div class="form-group">
            <label for="title">Full title:</label>
            <input type="text" class="form-control" placeholder="Full title" name="title" required>
        </div>

        <div class="form-group">
            <label for="published">Published:</label>
            <input type="text" class="form-control" placeholder="published" name="published" required>
        </div>

        <div class="form-group">
            <label for="formats">Formats:</label>
            <input type="text" class="form-control" placeholder="Formats" name="format" required>
        </div>

        <div class="form-group">
            <label for="creator">Creator</label>
            <input type="text" class="form-control" placeholder="Creator" name="creator" required>
        </div>

         <div class="form-group">
            <label for="held">Held by</label>
            <input type="text" class="form-control" placeholder="Held by" name="held" required>
        </div>

         <div class="form-group">
            <label for="usage">Usage terms</label>
            <input type="text" class="form-control" placeholder="Usage terms" name="usage" required>
        </div>

         <div class="form-group">
            <label for="shelfmark">Shelfmark</label>
            <input type="text" class="form-control" placeholder="Shelfmark" name="shelfmark" required>
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" placeholder="Description" name="Description" required>
        </div>

</div>

<div class = "button">
     <a target="_blank" href="2.php">
        <img src="img/home.png" alt="1" width="60" onmousedown="mousedown();">
   </a>
</div>



<body>
<html>

