<?php include('./includes/header.php');?>
<!---------------------------------- Formulář ------------------------------------->
<script src="../template/js/ckeditor.js"></script>
            <form role="form"  method="post" action="register.php">
                <div class="mb-3">
                  <label for="" class="form-label">Název</label>
                  <input name="titul" placeholder="Vlož název titulu" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Kategori" class="form-label">Kategorie</label>
                    <select name="kategori" class=" form-control" id="">
                        <option value="">Design</option>
                        <option value="">Development</option>
                        <option value="">Bussines & Marketing</option>
                        <option value="">Search Engines</option>
                        <option value="">Cloud & Hosting</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Text příspěvku</label>
                    <textarea  id="body" class=" form-control" name="body" cols="80" rows="10"></textarea>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#body'),{

                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    <?php include('./includes/footer.php');?>