<?php
require '../../config/Db.php';

$b = "test";
class Project extends DbConnection
{
    public function selectData( $where = 1){
        // $array = array();
        $sql = "SELECT * FROM `projects`"." WHERE " .$where;
        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        return $array;
    }


    public function selctProjectWithType(){
        $sql = "SELECT * FROM `projects` INNER JOIN project_type ON projects.project_type = project_type.project_type_id";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        return $array;

    }

    public function selectProjectType(){
        $sql =  "SELECT * FROM `project_type`";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        return $array;
    }


    public function selectProjectByType($where){
        $sql =  "SELECT * FROM `projects` WHERE `project_type` = $where";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        if (isset($array)){
            return $array;
        } else {
            header("Location: project_type_view.php?message");
        }
    }

    public  function  selectDetailsOfProject(){
        $sql = "SELECT * FROM `project_details` INNER JOIN projects ON project_details.project_id = projects.project_id";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        return $array;
    }
}