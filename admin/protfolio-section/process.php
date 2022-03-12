<?php
require './Project.php';

$data = new Project();


//DELETE PROJECT PROCESS
if (isset($_POST['delete_project'])){
    $project_id = $_POST['project_id'];
    if($data->deleteProject($project_id)){
        $message = "Project deleted  successfully !!";
        $message_color ="danger";
        header("Location: protfolio_view.php");

    }
}