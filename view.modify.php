  <div class="container">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">

            <?php
                Alert::displayMessage();
            ?>

            <h1 class="text-center"> Modification form </h1>
           <br>
           <br>
           


           <div class="form-group">
  <h3 class="text-center">Please enter the details of the student:</h3>
  <br>
  <form action="edit/change-student.php" method="post" id="addForm">

        <div class="form-group">
            <label for="group number">Firstname:</label>
            <input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
        </div>

        <div class="form-group">
            <label for="title">Lastname:</label>
            <input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
        </div>

        <div class="form-group">
            <label for="published">Current Group Number:</label>
            <input type="text" class="form-control" placeholder="Current Group Number" name="old" required>
        </div>

        <div class="form-group">
            <label for="formats">New Group Number:</label>
            <input type="text" class="form-control" placeholder="New Group Number" name="new" required>
        </div>


        

        
    


        <input type="hidden" name="postExercice" value = "111">

        <button type="submit" class="btn btn-primary center-block">Change</button>
    </form>
</div>
 <br>
           


           

                

   
    


    
    </div>