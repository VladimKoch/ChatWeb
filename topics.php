<?php require_once('core/init.php');?>


<?php 

//Create Topics Object
$topic = new TopicModel();


//Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get user From url
$user_id = isset($_GET['user']) ? $_GET['user'] : null;


//Get Template & Assign Variables
$template = new Template('sablony/topics.php');

//Assign Template Variables
if(isset($category)){
    $template->topics = $topic -> getByCategory($category);
    $template->title = 'Posty v "' .$topic->getCategory($category)-> name.'"';
}

if(isset($user_id)){
    $template -> topics = $topic -> getByUser($user_id);
    // $template -> title = 'Posty v "'.$user->getUser($user_id)->username.'"';
}

if(!isset($category) && !isset($user_id)){
    
    $template->topics = $topic -> getAllTopics();
}



//Assign Vars
$template -> totalTopics = $topic -> getTotalTopics();
$template -> totalCategories = $topic -> getTotalCategories();





//Display Template

echo $template;

?>