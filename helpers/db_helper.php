<?php 

/**
 * Get # of replies per topic
 */

function replyCount($topic_id){
    $db = new Database;
    $db -> query('SELECT* FROM replies WHERE topic_id = :topic_id');
    $db -> bind(':topic_id',$topic_id);
    //Assign Rows
    $rows = $db->resultset();
    //get count
    return  $db->rowCount();
}

/**
 * Get CAtegories
 */

function getCategories(){
    $db = new Database;
    $db -> query('SELECT * FROM categories');

    //Assign Result SEt
    $results = $db -> resultset();
    return $results;
}

/**
 * User Posts count
 */
function userPostCount($user_id){
    $db = new Database;
    $db ->query('SELECT * FROM topics WHERE user_id = :user_id');

    $db -> bind (':user_id',$user_id);

    //Assign Rows
    $rows = $db->resultset();
    //Get count
    $topic_count = $db -> rowCount();

    $db -> query ('SELECT * FROM replies WHERE user_id = :user_id');
    $db->bind(':user_id',$user_id);
    //Assing Rows
    $rows = $db->resultset();

    //GET count
    $reply_count = $db -> rowCount();
    return $topic_count + $reply_count;
}
?>