<?php require('core/init.php');?>


<?php 


//Create New Topic
$topic = new Topic;

$topic_id = $_GET['id'];

//Get Template & Assign Variables
$template = new Template('sablony/topic.php');



//Assign Vars

$template -> topic = $topic->getTopic($topic_id);
// $template -> replies = $topic -> getReplies($topic_id);
$template -> title = $topic -> getTopic($topic_id) -> title;

//Display Template

echo $template;


?>