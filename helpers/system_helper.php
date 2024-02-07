<?php 



/**
 * Redirect To Page
 */

function redirect ($page = FALSE, $message = NULL, $message_type = NULL){
    if (is_string($page)){
        $location = $page;
    }
    else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

//Check for Message
if($message !=NULL){
    //Set Message
    $_SESSION['message'] = $message;

}

//Check for type
if($message_type != NULL){
    //Set Message Type
    $_SESSION['message_type'] = $message_type;
}

//Redirect

header('Location: ' . $location);
exit;

}

/**
 * Display message
 */

 function displayMessage(){
    if(!empty($_SESSION['message'])){

        //assign Message var
        $message = $_SESSION['message'];

        if(!empty ($_SESSION['message_type'])){

            //Assign type var
            $message_type = $_SESSION['message_type'];

            //create output
            if($message_type == 'error'){
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else{
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        //unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);

    } else {
        echo '';
    }
 }









?>