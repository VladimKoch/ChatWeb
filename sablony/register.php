<?php require_once('../sablony/includes/header.php');?>

            <form role="form" enctype="multipart/form-data" method="post" action="register.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Vaše jméno</label>
                  <input name="name" type="text" class="form-control">
                  <div id="emailHelp" class="form-text">Nebudeme se sníkým sdílet ohledně vašich údajů</div>
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
                  <label for="password" class="form-label">Heslo znovu</label>
                  <input name="password2" type="password" class="form-control">
                </div>
                <label for="about" class="form-label">Něco o sobě</label>
                <textarea name="about" rows="4" cols="50" class="form-control"></textarea>
                
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                    <input class="form-control" type="file" >
                  </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Zapamatuj si mě</label>
                </div>
                <button type="submit" name="register" class="btn btn-primary">Odeslat</button>
            </form>


<?php require_once('../sablony/includes/footer.php');?>