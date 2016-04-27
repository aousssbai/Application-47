  <div class="container">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">

            <?php
                Alert::displayMessage();
            ?>

            <h1 class="text-center"> comment on the rejected project </h1>
           <br>
           <br>
            <form action="edit/save-message.php" method="post" id="addForm">


           <div class="form-group">
  <label for="sel1">Group you are writing to:</label>
  <select class="form-control" id="sel1" name = "groupNumber">
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
           


           

                <div class="form-group">
                    <label for="sel1">Your Comment:</label>
            
                    <textarea type="textarea" class="form-control" placeholder="Comment" name="message" required></textarea>
                </div>
                <input type="hidden" name="postExercice" value = "111">
                

                <button type="submit" class="btn btn-primary center-block">Send</button><br>
           
</form>
            


        </div>
    </div>
