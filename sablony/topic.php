<?php include('./includes/header.php');?>
<ul id="topics">
              <li id="main-topic" class="topic topic">
                <div class="row">
                  <div class="col-md-2">
                    <div class="user-info">
                      <img class="avatar float-end" src="../images/avatars/istockphoto-1151399410-170667a.jpg" alt="">
                      <ul>
                        <li><strong>BratT81</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class=" col-md-10">
                    <div class="topic-content float-end">
                      <p>I just worked insplit mode in dreamwaver and  paid attention to what was how 
                        did you learn css and htmls? hol long did it take you ntil you were profiled</p>
                    </div>
                  </div>
                </div>
              </li>
              <li id="main-topic" class="topic topic">
                <div class="row">
                  <div class="col-md-2">
                    <div class="user-info">
                      <img class="avatar float-end" src="../images/avatars/istockphoto-1151399410-170667a.jpg" alt="">
                      <ul>
                        <li><strong>BratT81</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class=" col-md-10">
                    <div class="topic-content float-end">
                      <p>I just worked insplit mode in dreamwaver and  paid attention 
                        to what was how did you learn css and htmls? hol long did it take you ntil you were profiled</p>
                    </div>
                  </div>
                </div>
              </li>
              <li id="main-topic" class="topic topic">
                <div class="row">
                  <div class="col-md-2">
                    <div class=" user-info">
                      <img class="avatar float-end" src="../images/avatars/istockphoto-1151399410-170667a.jpg" alt="">
                      <ul>
                        <li><strong>BratT81</strong></li>
                        <li>43 posts</li>
                        <li><a href="profile.php">Profile</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class=" col-md-10">
                    <div class="topic-content float-end">
                      <p>I just worked insplit mode in dreamwaver and  paid attention to what was how did you learn 
                        css and htmls? hol long did it take you ntil you were profiled</p>
                    </div>
                  </div>
                </div>
              </li>
             </ul>
             <h3>Reáguj na Topic</h3>
             <form role="form">
              <div class="form-group">
                <textarea name="reply" id="reply" cols="80" rows="10"></textarea>
                <script>
                  ClassicEditor
                      .create(document.querySelector('#reply'),{

                        height: '500px'
                      })
                      .catch(error => {
                          console.error(error);
                      });
              </script>
              </div>
             </form>
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
        <?php include('./includes/footer.php');?>