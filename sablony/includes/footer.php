</div>
            </div>
          </div>

    <div class=" col-md-4">
      <div id="sidebar">
        <div class=" d-block">
            <h3>Login form</h3>
            <form role="form">
              <div class=" form-group">
                <label for="Username">Username</label>
                <input type="type" class="form-control" name="username" placeholder="Enter username"> 
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="enter password">
              </div>
              <button name="do_login" type="subnit" class="btn btn-primary">Login</button><a class="btn btn-secondary" href="register.html">Create an account</a>
            </form>
        </div>
        <div class=" d-block">
          <h3>Categories</h3>
          <div class="list-group">
              <a href="#" class=" list-group-item active list-group-item-action">All topics: <span class="span badge float-end">14</span></a>
            <?php if($topics): ?>
              <?php foreach(getCategories() as $category) : ?>
              <a href="topics.php?category=<?php echo $category->id;?>" class=" list-group-item list-group-item-action"><?php echo $category->name;?><span class="span badge float-end">14</span></a>
             
              <?php endforeach;?>
            <?php else : ?>
              <p> Nejsou vloženy žádné kategorie </p>
            <?php endif ;?>
              
          </div>
        </div>



      </div>
    </div>
  </div>
</div>
</body>
<script src="<?php echo BASE_URL;?>/template/js/bootstrap.js"></script>
</html>