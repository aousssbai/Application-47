

<div class="container">

 <?php
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

        ?>



        <h1 class="text-center">Submission page</h1>

        

       
            <tbody>
        <?php  
        

      

         ?>
            </tbody>
        </table>

        <br>


    <form action="edit/add-exercice.php" method="post" id="addForm" >
  <h4> note : the fields marked with * are not compulsory. Just write 'unknown' if not available. 
    <br>
    <br>
    <br>
        <div class="form-group">
            <label for="group number">Group number :</label>
            <input type="text" class="form-control" placeholder="Group number" name="group_number" required>
        </div>
<br>
        <div class="form-group">
            <label for="title">Full title :</label>
            <input type="text" class="form-control" placeholder="Full title" name="title" required>
        </div>
<br>
        <div class="form-group">
            <label for="published">Published in :</label>
            <input type="text" class="form-control" placeholder="published" name="published" required>
        </div>
<br>
        <div class="form-group">
            <label for="formats">Formats :</label>
            <input type="text" class="form-control" placeholder="Formats" name="format" required>
        </div>
<br>
        <div class="form-group">
            <label for="creator">Creator : </label>
            <input type="text" class="form-control" placeholder="Creator" name="creator" required>
        </div>
<br>
         <div class="form-group">
            <label for="held">* Held by : </label>
            <input type="text" class="form-control" placeholder="Held by" name="held" required>
        </div>
<br>
         <div class="form-group">
            <label for="myUsage">* Usage terms : </label>
            <input type="text" class="form-control" placeholder="Usage terms" name="myUsage" required>
        </div>
<br>
         <div class="form-group">
            <label for="shelfmark">* Shelfmark : </label>
            <input type="text" class="form-control" placeholder="Shelfmark" name="shelfmark" required>
        </div>
<br>
        <div class="form-group">
            <label for="Description">Description (max 300 words) : </label>
            <textarea type="text" class="form-control" placeholder="Description" name="Description" required></textarea>
        </div>
<br>
         <div class="form-group">
            <label for="image">Images (up to 5) : </label>
            <input type="file" class="form-control" placeholder="Images" name="image" multiple ="multiple" required>
        </div>
<br>
         <div class="form-group">
            <label for="shelfmark">Link 1 to a video : </label>
            <input type="text" class="form-control" placeholder="Link 1" name="video1" required>
        </div>
<br>
         <div class="form-group">
            <label for="shelfmark">Link  2 to a video : </label>
            <input type="text" class="form-control" placeholder="Link 2" name="video2" required>
        </div>

        

        
    


        <input type="hidden" name="postExercice" value = "111">

        <button type="submit" class="btn btn-primary center-block">Submit</button>
    </form>

    
</div>
