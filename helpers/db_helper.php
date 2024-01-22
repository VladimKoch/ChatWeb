<?php 

/**
 * Get # of replies pertopic
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

function getCategories(){
    $db = new Database;
    $db -> query('SELECT * FROM categories');

    //Assign Result SEt
    $results = $db -> resultset();
    return $results;
}

?>