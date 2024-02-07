<?php require('core/init.php');?>


<?php 
//Create Topic Object
$topic = new TopicModel;

//User object
$user = new User;


if(isset($_POST['register'])){
    //Create Data Array
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = md5($_POST['password']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:j:s");
    

    
    //Upload Avatar Image
    if($user->uploadAvatar()){
        $data['avatar'] = $_FILES['avatar']['name'];
    } else {
        $data['avatar'] = 'noimage.png';
    }
    //Register User
    if($user -> register($data)){
        redirect('index.php', 'Již jsi registrovaný a můžeš se přihlásit', 'success');

    }else{
        redirect('index.php', 'Něco šlo špatně s registrací','error');
    }
}


//Get Template & Assign Variables
$template = new Template('sablony/register.php');


$template -> totalCategories = $topic -> getTotalCategories();
//Assign Vars

$template->heading = 'Toto je směřování šablony';

//Display Template

echo $template;


?>