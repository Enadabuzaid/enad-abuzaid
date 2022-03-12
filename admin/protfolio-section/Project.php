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

    public function selectDetailsOfProject(){
        $sql = "SELECT * FROM `project_details` INNER JOIN projects ON project_details.project_id = projects.project_id";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        return $array;
    }


    public function trashedProjectType($project_id){
        $sql = "UPDATE `project_type` SET project_type_status='2' WHERE project_type_id=$project_id";

        if($this->conn->query($sql)){
            return true;
        } else {
            return "error ". $this->conn->error;
        }
    }

    public function trashedProject($project_id){
        $sql = "UPDATE `projects` SET project_status='2' WHERE project_id=$project_id";

        if($this->conn->query($sql)){
            return true;
        } else {
            return "error ". $this->conn->error;
        }
    }

    public function returnProject($project_id){
        $sql = "UPDATE `projects` SET project_status='1' WHERE project_id=$project_id";

        if($this->conn->query($sql)){
            return true;
        } else {
            return "error ". $this->conn->error;
        }
    }

    public function insertProject(array $data){
        $sql = "INSERT INTO `projects` (`project_id`,`project_title`,`project_cover` , `project_type`, `project_status` ) 
        VALUES ('{$data['project_id']}' ,'{$data['project_title']}' , '{$data['project_cover']}' , '{$data['project_type']}' , '{$data['project_status']}')";

        $sql2 = "INSERT INTO `project_details` (`project_details_id`, `project_id`, `project_brief`, `date`, `client`, `tools`, `demo`, `code`, `screenshot_link`, `project_details_status`) 
        VALUES (NULL ,'{$data['project_id']}' , '{$data['project_breif']}' , '{$data['project_date']}'
        , '{$data['project_client']}' , '{$data['project_tool']}' , '{$data['project_demo']}' , '{$data['project_code']}' , '{$data['project_screen']}' , '1')";


        if($this->conn->query($sql) && $this->conn->query($sql2)){

            return true;
        } else {
            return "error ". $this->conn->error;
        }
    }

}