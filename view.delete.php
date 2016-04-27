  <div class="container">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">

            <?php
                Alert::displayMessage();
            ?>

            <h1 class="text-center"> Delete a Project </h1>
           <br>
           <br>
            <form action="edit/delete-project.php" method="post" id="addForm">


           <div class="form-group">
  <label for="sel1">Group Project you want to delete:</label>
  <select class="form-control" id="sel1" name = "groupNumber">
    <option>Group Number</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>

  </select>
</div>
 <br>
           


          
                <input type="hidden" name="postExercice" value = "111">
                

                <button type="submit" class="btn btn-primary center-block">Delete</button><br>
           
</form>
            


        </div>
    </div>