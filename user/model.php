
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      
      <div class="form" style="max-width:none !important;
  margin: 0 !important;">
    
        <form class="login-form" action="index.php" method="post">
          <input type="text" placeholder="Album Name" name="album_name" required/>
          <input type="text" placeholder="Album Description" name="description" required/>
          <button type="submit" name="submit">Create Album</button>
    <!--       <p class="message">Not registered? <a href="#">Create an account</a></p>
    -->    
        </form>
        </div>

  <!--</div>-->


      <!--<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>-->
      </div>
    </div>
  </div>





  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      
      <div class="form" style="max-width:none !important;
  margin: 0 !important;">
    
        <form class="login-form" action="gallery/index.php" method="post">
          <label for="sel1">Select Album:</label>
        <select class="form-control" id="sel1" name="album_name">
          <?php
            foreach($data['albums'] as $x){
          ?>
          
          <option value="<?= $x;?>"><?= $x;?></option>
          <?php
          }
          ?>
          </select><br>
          <!--<input type="text" placeholder="Album Name" name="album_name" required/>-->
          <!--<input type="text" placeholder="Album Description" name="description" required/>-->
          <button type="submit" name="submit">View</button>
    <!--       <p class="message">Not registered? <a href="#">Create an account</a></p>
    -->    
        </form>
        </div>

  <!--</div>-->


      <!--<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>-->
      </div>
    </div>
  </div>