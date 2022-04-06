<?php
require '../../config/Db.php';

class Project extends DbConnection
{
    public  $inclue_path = "../admin-includes/";

    public function ProjectPath($page){
        return require $this->inclue_path.$page.".php";
    }

    public function selectData( $where = 1){
        // $array = array();
        $sql = "SELECT * FROM `projects`"." WHERE " .$where;
        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }

        if (!empty($array)) {
            return $array;
        } else{
            return "empty";
        }
    }


    public function selctProjectWithType(){
        $sql = "SELECT * FROM `projects` INNER JOIN project_type ON projects.project_type = project_type.project_type_id";

        $result = $this->conn->query($sql) or die($this->conn->error);
        if(mysqli_num_rows($result) > 0 ) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
            return $array;
        }
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

    public function deleteProject($project_id){
        $sql = "DELETE FROM `projects` WHERE project_id=$project_id";

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

    public function insertProjectPhotos(array $data){
        $sql = "INSERT INTO `project_photos` (`projoct_photo_id`,`project_id`,`photo` , `photo_status` ) 
        VALUES (NULL,'{$data['project_id']}' ,'{$data['photo']}' , '{$data['photo_status']}')";

        if($this->conn->query($sql)){
            return true;
        } else {
            return "error ". $this->conn->error;
        }
    }

    public function movePhotos(array $imgs ,array $tmp){
        for($i =0; $i < count($imgs); $i++){
            $image_name =$imgs[$i];
            $image_tmp = $tmp[$i];
            $image_folder = "/var/www/html/enad-abuzaid/img/projects/gallery/".$image_name;
            move_uploaded_file($image_tmp, $image_folder);

        }

    }

    public function viwSingleProject($id){
        $sql = "
        SELECT projects.project_title,
           projects.project_cover,
           project_type.project_type_name,
           project_details.project_brief,
           project_details.date,
           project_details.client,
           project_details.demo,
           project_details.tools,
           project_details.demo,
           project_details.code,
           project_details.screenshot_link,
           project_photos.photo 
        FROM projects 
           INNER JOIN project_details ON project_details.project_id = projects.project_id 
           INNER JOIN project_photos ON project_photos.project_id = projects.project_id
           INNER JOIN project_type ON project_type.project_type_id = projects.project_type
        WHERE projects.project_id = $id
        ";

        $result = $this->conn->query($sql) or die($this->conn->error);

        while($row = $result->fetch_assoc())
        {
            $array[] = $row;
        }
        if (isset($array)){
            return $array;
        } else {
            return false;
            //empty;
        }
    }

}