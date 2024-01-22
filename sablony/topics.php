<?php include('./includes/header.php');?>


<ul id="topics">
  <?php if($topics) : ?>
    <?php foreach($topics as $topic) : ?>
                <li class="topic">
                  <div class="row">
                    <div class=" col-md-2">
                      <img class="avatar" src="/images/avatars/<?php echo $topic->avatar;?>" alt="">
                    </div>
                    <div class=" col-md-10">
                      <div class=" topic-content float-end">
                        <h3><a href="topic.html"><?php echo $topic->title;?></a></h3>
                        <div class="topic-info">
                            
                            <a href="topics.php?category=<?php echo urlFormat($topic->category_id);?>"><?php echo $topic -> name; ?></a> >>
                            <a href="profile.php?user=<?php echo urlFormat($topic->user_id);?>"><?php echo $topic -> username; ?></a> >> <?php echo formatDate($topic -> create_date);?>
                            <span class="span badge float-end" style="color:blue"><?php replyCount($topic->id);?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
      <?php endforeach ; ?>
            </ul>
<?php else : ?>
  <p> Nejsou zde žádné témata k zobrazení </p>

<?php endif ; ?>
                <h3>Forum Statistic</h3>
                <ul>
                  <li>Celkový počet uživatelů: <strong></strong></li>
                  <li>Celkový počet Topiků: <strong><?php echo $totalTopics;?></strong></li>
                  <li>Celkový počet Kategorií: <strong><?php echo $totalByCategory;?></strong></li>
                </ul>



<?php include('./includes/footer.php');?>