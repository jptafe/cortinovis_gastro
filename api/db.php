<?php
class dbObj {
    private $dbconn;
    public function __construct() {
        $this->dbconn = new PDO("mysql:host=127.0.0.1;dbname=test", 'root','');
        //debug; comment out in production
        $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    function acceptOrder($dish) {
        $sql = "INSERT INTO testtable (menuitem) 
                VALUES ('$dish')";
        $stmt = $this->dbconn->prepare($sql);
        //how do we stop SQL injection?
        return $stmt->execute();
    }


    function getRestaurants() {
        return "['restaurant': 'here']";
    }
    function getDishes() {
        return "['dish': 'food']";
    }
    function checkUserAccount() {

    }
}
?>