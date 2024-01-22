<?php include('../sablony/includes/header.php');?>

            <form role="form" enctype="multipart/form-data" method="post" action="register.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Vaše jméno</label>
                  <input name="name" type="text" class="form-control">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Emailová adresa</label>
                    <input name="email" type="email" class="form-control">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Uživatelské jméno</label>
                    <input name="username" type="text" class="form-control">
                    <div id="emailHelp" class="form-text"></div>
                  </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Heslo</label>
                  <input name="password" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                    <input class="form-control" type="file" disabled>
                  </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


<?php include('../sablony/includes/footer.php');?>