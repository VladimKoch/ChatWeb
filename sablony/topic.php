<?php require_once('./includes/header.php');?>

<script src="../template/js/ckeditor.js"></script>
<ul id="topics">
  
      <li id="main-topic" class="topic topic">
        <div class="row">
          <div class="col-md-2">
            <div class="user-info">
              <img class="avatar float-end" src="<?php echo BASE_URL; ?>/images/avatars/<?php echo $topic -> avatar;?>" alt="">
              <ul>
                <li><strong><?php echo $topic -> username;?></strong></li>
                <li><?php echo userPostCount($topic -> user_id);?> Posts</li>
                <li><a href="<?php echo BASE_URL; ?>topics.php?user=<?php echo $topic -> user_id; ?>">View topics</a></li>
              </ul>
            </div>
          </div>
          <div class=" col-md-10">
            <div class="topic-content float-end">
              <p><?php echo $topic -> body;?></p>
              </div>
            </div>
          </div>
        </li>
    

<?php foreach($replies as $reply) : ?>
            <li class="topic topic">
        <div class="row">
          <div class="col-md-2">
            <div class="user-info">
              <img class="avatar float-end" src="<?php echo BASE_URL;?>/images/avatars/<?php echo $reply->avatar;?>" alt="">
              <ul>
                <li><strong><?php echo $reply -> username;?></strong></li>
                <li><?php echo userPostCount($reply -> user_id);?>Posts</li>
                <li><a href="<?php echo BASE_URL; ?>topics.php?user=<?php echo $reply->user_id;?>">View Topics</a></li>
              </ul>
            </div>
          </div>
          <div class=" col-md-10">
            <div class="topic-content float-end">
              <p><?php echo $reply->body;?></p>
              </div>
            </div>
          </div>
        </li>
    <?php endforeach ; ?>
            
        
</ul>
             <h3>Reáguj na Topic</h3>
             <form role="form">
              <div class="form-group">
                <textarea name="reply" id="reply" cols="80" rows="10"></textarea>
                <script>
                  ClassicEditor
                      .create(document.querySelector('#reply'),{

                    
                      })
                      .catch(error => {
                          console.error(error);
                      });
              </script>
              </div>
             </form>
      

    
        <?php require_once('./includes/footer.php');?>