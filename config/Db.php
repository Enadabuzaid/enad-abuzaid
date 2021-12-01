<?php 
Class DbConnection 
{
    protected $host ='localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'enad-abuzaid';

    public $conn = null;


    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);
        if($this->conn->connect_error){
            die("connected faild " . $this->conn->connect_error);
        }
    }

    public function select($table_name,$where = null)  
    {  
         $array = array();  
         $query = "SELECT * FROM ".$table_name." WHERE " .$where;
        $result = $this->conn->query($query) or die($this->conn->error);
         
         while($row = $result->fetch_assoc())  
         {  
              $array[] = $row;  
         }  
         return $array;  
    }  

    public function createDataBase()
    {  
            $sql = "CREATE DATABASE " . $this->database;
            if($this->conn->query($sql)){
                echo "Database <b>({$this->database})</b> created successfully ..";
            } else {
                echo "Erro creating database : " . $this->conn->error;
            }
    }

    public function createTabels(){
        
    }
}

?>