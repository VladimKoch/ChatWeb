<?php


class Database{
    public $host = "localhost";
    public $username = "Vlada89";
    public $password = "Tyr2017";
    public $db_name = "chatweb";

    public $conn;
    public $error;
    public $stmt;
    public $dsn;

    /*--------------------------------------------------
                    Class constructor
    --------------------------------------------------*/

    public function __construct(){

        //set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name; 

        //Set options
        $options = array (
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );


        //CREATE a new PDO instance

        try {
            $this -> conn = new PDO ($dsn, $this->username, $this->password, $options);
        }   //Catch any errors

        catch (PDOException $e){
            $this -> error = $e->getMessage();
        }

    }    
    


    /*--------------------------------------------------    
    Table Creator
    --------------------------------------------------*/                    
    
    public function createTable(){
        
        try{
            
            
            $db_users = "CREATE TABLE IF NOT EXISTS users(
                        id INT (11) NOT NULL AUTO_INCREMENT,
                        name VARCHAR (50) NOT NULL ,
                        email VARCHAR (50) NOT NULL,
                        avatar VARCHAR (50),
                        username VARCHAR (10) NOT NULL,
                        password VARCHAR (64) NOT NULL,
                        about TEXT,
                        last_activity DATETIME NOT NULL,
                        join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        PRIMARY KEY (id))";

$db_categories = "CREATE TABLE IF NOT EXISTS categories(
                            id INT(11) NOT NULL AUTO_INCREMENT,
                            name VARCHAR (50) NOT NULL,
                            description TEXT  NOT NULL,
                            PRIMARY KEY (id))";

$db_topics = "CREATE TABLE IF NOT EXISTS topics(
                            id INT (11) NOT NULL AUTO_INCREMENT,
                            category_id INT (11) NOT NULL,
                            user_id INT (11) NOT NULL,
                            title VARCHAR(100),
                            body TEXT,
                            last_activity DATETIME NOT NULL,
                            create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                            PRIMARY KEY (id))";                
            
            $db_replies = "CREATE TABLE IF NOT EXISTS replies(
                            id INT (11) NOT NULL AUTO_INCREMENT,
                            topic_id INT (11) NOT NULL,
                            user_id INT (11) NOT NULL,
                            body TEXT NOT NULL,
                            create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                            PRIMARY KEY(id))";                            


                       

                            
                        $this -> conn -> exec($db_users);
                        $this -> conn -> exec($db_categories);
                        $this -> conn -> exec($db_topics);
                        $this -> conn -> exec($db_replies);

                            
                            // if($this -> conn -> query($db_users) && $this -> conn -> query($db_categories) === false && $this-> conn -> query($db_topics) && $this->conn->query($db_replies)){
                                
                                //     die("Error creatin table: " . $this->conn->error);       
                                // }
                                
                            } catch (PDOException $e){
                                echo 'Chyba při vytváření tabulky: ' . $e ->getMessage();
                            }    
                        }    
                                                


/*--------------------------------------------------
                Metoda pro uzavření spojení
--------------------------------------------------*/
public function closeConnection()
{
    $this -> conn = null;
}



/*--------------------------------------------------
                Query selector and functions
--------------------------------------------------*/
                        
public function query($query) {
    $this->stmt = $this->conn->prepare($query);
}

public function bind($param, $value, $type = null) {
    if (is_null($type)) {
        switch (true) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
    }
    $this->stmt->bindValue($param, $value, $type);
}

public function execute() {
    return $this->stmt->execute();
}


public function resultset(){
    $this -> execute();
    return $this -> stmt ->fetchALL(PDO::FETCH_OBJ);
}


public function single(){
    $this -> execute();
    return $this -> stmt -> fetch(PDO::FETCH_OBJ);
}


public function rowCount(){
    return $this->stmt->rowCount();
}


public function beginTransaction(){
    return $this->conn->beginTransaction();
}

public function endTransaction(){
    return $this->conn->commit();
}

public function cancelTransaction(){
    return $this -> conn->rollback();
}
                        

        
        
    
}
     
     


?>

