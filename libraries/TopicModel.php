<?php

// echo (new \ReflectionClass('Topic')) -> getFileNAme();

class TopicModel{
    //Inicializace DB Variable
    private $db;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this-> db = new Database;
    }

    /**
     *  Get all topics
     */

     public function getAllTopics(){
        $this->db->query('SELECT topics.*,users.username, users.avatar, categories.name FROM topics
                                INNER JOIN users
                                ON topics.user_id = users.id
                                INNER JOIN categories
                                ON topics.category_id = categories.id
                                ORDER BY create_date DESC');

            //Sddinh Result Set
            $results =  $this -> db -> resultset();
            return $results;
                            
     }

    /**
     * Get Total # of Topics
     */

    public function getTotalTopics(){
        $this -> db-> query('SELECT * FROM topics');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }


    /**
     * Get total # of Categories
     */

    public function getTotalCategories(){
        $this -> db->query('SELECT * FROM categories');
        $rows = $this->db->resultset();
        return $this->db->rowCount();
    }


    /**
     * Get Total # of Replies
     */
    public function getTotalReplies($topic_id){
        $this -> db -> query('SELECT * FROM replies WHERE topic_id = '.$topic_id);
        $rows = $this -> db -> resultset();
        return $this -> db -> rowCount();
        }

        /**
         * Get category by id
         */
        
        public function getCategory($category_id){
            $this -> db -> query('SELECT * FROM categories WHERE id = :category_id');
            $this -> db -> bind (':category_id', $category_id);
            //Assign row
            $row = $this->db->single();
            return $row;
            
        }



        /**
         *  Get Topics by category
         */

         public function getByCategory($category_id){
            $this -> db -> query('SELECT topics.*,categories.*, users.username,users.avatar, categories.name FROM topics
            INNER JOIN categories
            ON topics.category_id = categories.id
            INNER JOIN users
            ON topics.user_id = users.id
            WHERE topics.category_id=:category_id');

            $this->db->bind(':category_id', $category_id);

            //Assign Result Set
            $results = $this -> db -> resultset();

            return $results;

         }


         /**
          * GET Topic by ID
          */
         public function getTopic($id){
            $this -> db -> query("SELECT topics . *, users.username, users.name,users.avatar FROM topics
            INNER JOIN users
            ON topics.user_id = users.id
            WHERE topics.id = :id");

        $this -> db -> bind(':id', $id);
        
        //Assign Row

        $row = $this ->db ->single();
        return $row;
        }

        /**
         * GET Topic by ID 
         */

        //  public function getTopicbyId($id){
        //     $this -> db -> query ("SELECT topics.id ")
        //  };

        /**
         * GET Topic Replies 
         */

        public function  getReplies($topic_id){
            $this ->db -> query("SELECT replies . *, users . * FROM replies
                                    INNER JOIN users
                                    ON replies.user_id = users.id
                                    WHERE replies.topic_id = :topic_id
                                    ORDER BY create_date ASC");

                $this -> db -> bind(':topic_id',$topic_id);    

                   $results = $this -> db -> resultset();

                   return $results;

        }


        /**
         * Get Topics By Username
         */

         public function getByUser($user_id){
            $this -> db -> query ("SELECT topics.*,categories.*,users.username,users.avatar FROM topics
                                    INNER JOIN categories
                                    ON topics.category_id = categories.id
                                    INNER JOIN users
                                    ON topics.user_id=users.id
                                    WHERE topics.user_id = :user_id");

                        $this -> db -> bind(':user_id',$user_id);
            //assing Result set
            $results = $this -> db -> resultset();

            return $results;
         }
    }
?>