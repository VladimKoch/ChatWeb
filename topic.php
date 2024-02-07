<?php require_once('core/init.php');?>


<?php 

//new class
$topic = new TopicModel();

//Get ID From URL

    $topic_Id = $_GET['id'];


//Get ID from URL by categories

// $topic_Id = isset($_GET['category']);

//Get Template & Assign Variables
$template = new Template('sablony/topic.php');



//Assign Vars
$template ->  topic = $topic -> getTopic($topic_Id);
$template -> replies = $topic -> getReplies($topic_Id);
$template -> title = $topic -> getTopic($topic_Id) -> title;


//Display Template

echo $template;


?>