<?php require('core/init.php');?>


<?php 

//Create Topics Object
$topic = new Topic;


//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;


//Get Template & Assign Variables
$template = new Template('sablony/topics.php');

//Assign Template Variables
if(isset($category)){
    $template->topics = $topic -> getByCategory($category);
    $template->title = 'Posty v "' .$topic->getCategory($category)->name.'"';
}

if(!isset($category)){
    
    $template->topics = $topic -> getAllTopics();
}


//Assign Vars
$template -> totalTopics = $topic -> getTotalTopics();
$template -> totalCategories = $topic -> getTotalCategories();


//Display Template

echo $template;


?>