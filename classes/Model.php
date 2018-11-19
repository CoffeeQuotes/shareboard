<?php 
abstract class Model
{
    protected $dbh;
    protected $stmt;

    public function __construct()
    {
        $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
           
    }

    // Query Method
    public function query($query) 
    {
        $this->stmt = $this->dbh->prepare($query);
    } # Query Function ended

    // Binds the prep statement
    public function bind($param, $value, $type= null) {
        if(is_null($type)) {
            switch (true) {
                case is_int($value):
                    # code...
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    # code...
                    $type = PDO::PARAM_BOOL;
                    break;    
                
                case is_null($value):
                    # code...
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    # code...
                    $type = PDO::PARAM_STR;
                    break;
            } # Switch Statement ended
        } # if Null type blogs ended
        $this->stmt->bindValue($param, $value, $type);
    } # Binds Function ended

    public function execute()
    {
        $this->stmt->execute();
    } # Execute Function ended

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } # Result Set Function ended

    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
