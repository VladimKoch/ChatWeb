<?php require('core/init.php');?>
<?php require('./libraries/Database.php');?>



<?php 
// Create Topic Object
$topic = new TopicModel();

//Get Template & Assign Variables
$template = new Template('sablony/frontpage.php');

// Create Tables
$db = new Database();
$db -> createTable();
$db -> closeConnection();

//Assign Vars
$template -> topics = $topic -> getAllTopics();
$template -> totalTopics = $topic -> getTotalTopics();
$template -> totalCategories = $topic -> getTotalCategories();

//Display Template

echo $template;


?>