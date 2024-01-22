<?php require('core/init.php');?>


<?php 
//Get Template & Assign Variables



$template = new Template('sablony/topic.php');



//Assign Vars

$template->heading = 'Toto je směřování šablony';

//Display Template

echo $template;


?>