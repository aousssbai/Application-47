<!DOCTYPE html>
<html>
<?php
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

        ?>
        <?php

$exercices = $exerciceManager->getListUnchecked4();

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:100px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

<div class="head center-block" name = "head">
    <img class="center block img-responsive"src="IOE-library-system/img/head.jpg" alt="1" width = "1250" height = "2000">
  </a>
</div> 
<div class = "button">
     <a target="_blank" href="welcome.php">
        <img src="IOE-library-system/img/home.png" alt="1" width="60" onmousedown="mousedown();">
   </a>
</div>
    <script type="text/javascript" src="group/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="group/js/jssor.slider.mini.js"></script>
    
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
           
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
           
        });
    </script>

    <style>
        
       
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
           
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('IOE-library-system/img/1.jpg') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

       
        .jssort01 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 72px;
            height: 72px;
        }
        div.info{
max-width: 330px;
top:100px;



}
div.publish{

position : absolute;
    top: 1128px;
    left: 250px;
}

div.descri{

width: 1070px;
left: 170px;
padding-left: 400px;
top: 900px;
position : absolute;


}
        div.button{
    position: absolute;
    top: 350px;
    left:1265px;

    width: 20px;
    height: 100px;
}



        
        .jssort01 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('group/img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 68px;
            height: 68px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 70px;
            height: 70px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01 .p.pdn .c {
            background-position: 50% 50%;
            width: 68px;
            height: 68px;
            border: #000 2px solid;
        }
        
        * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 72px;
            height /**/: 72px;


        }

        
    </style>

    
  
    <div id="jssor_1" style="position :absolute; top: 350px; left: 450px; width: 700px; height: 456px; overflow: hidden; visibility: hidden; background-color: white;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 100px; width: 600px; height: 356px; overflow: hidden;">
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/1.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/1.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/2.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/2.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/3.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/3.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/4.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/4.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/5.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/5.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/6.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/6.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/7.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/7.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/8.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/8.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/9.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/9.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/10.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/10.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/11.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/11.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/12.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/12.jpg" />
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="IOE-library-system/img/13.jpg" />
                <img data-u="thumb" src="IOE-library-system/img/13.jpg" />
            </div>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:500px;bottom:0px;width:0px;height:100px;" data-aut="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
     
</div>


</div>


<br>


     <div class ="info">


    <form action=<?php ?>"edit/edit-exercice.php" method="post" id="loginForm">
<br>
<br>

        <div class="form-group">
            <label for="groupNumber">Group number:</label>
            <input type="text" class="form-control" placeholder="GroupNumber" name="group_number" required value="<?php echo $exercices->getGroupNumber();?>">
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" placeholder="Full title" name="title" required value="<?php echo $exercices->getTitle();?>">
        </div>

        <div class="form-group">
            <label for="published">Published:</label>
            <input type="text" class="form-control" placeholder="Published" name="published" required value="<?php echo $exercices->getPublished();?>">
        </div>

        <div class="form-group">
            <label for="format">Format:</label>
            <input type="text" class="form-control" placeholder="Format" name="format" required value="<?php echo $exercices->getformat();?>">
        </div>

        <div class="form-group">
            <label for="creator">Creator</label>
            <input type="text" class="form-control" placeholder="Creator" name="creator" required value ="<?php echo $exercices->getcreator();?>">
        </div>

        <div class="form-group">
            <label for="held">Held by</label>
            <input type="text" class="form-control" placeholder="Held by" name="held" size = "1" required value ="<?php echo $exercices->getheld();?>">
        </div>

        <div class="form-group">
            <label for="myUsage">Usage</label>
            <input type="text" class="form-control" placeholder="Usage" name="Usage" required value ="<?php echo $exercices->getheld();?>">
        </div>

        <div class="form-group">
            <label for="shelfmark">Shelfmark</label>
            <input type="text" class="form-control" placeholder="Shelfmark" name="Shelfmark" required value ="<?php echo $exercices->getshelfmark();?>">
            <br>
            <label for="myUsage">Video Link 1</label>
            <input type="text" class="form-control" placeholder="Link" name="link 1" required value ="<?php echo $exercices->getVideo1();?>">
        </div>
 <br>
         <label for="myUsage">Video Link 2</label>
            <input type="text" class="form-control" placeholder="Link" name="link 2" required value ="<?php echo $exercices->getVideo2();?>">
        </div>

        

         

      


        <input type="hidden" name="postExercice" value="111">

        <?php if ($exercices->getId() > 0) {?>
            <input type="hidden" name="id" value="<?php echo $exercice->getId();?>">
            <?php }?>
            <div class = "publish">
<button type="submit" class="btn btn-primary center-block ">Publish</button>
</div>
       </form>
   </div>




 

<div class="descri" name="descri">
            <label for="Description">Description</label>
            <textarea type="text" class="form-control" placeholder="Description" name="Description" ><?php echo $exercices->getDescription();?></textarea>
        </div>
<br><br>

<a href="build-message.php">
  
    <button1  class="btn btn-primary ">Send back</button1>

</a>
  

 
</body>

</html>