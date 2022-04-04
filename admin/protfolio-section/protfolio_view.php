<?php
require './Project.php';
$root = '../';
$header_path = $root."admin-includes/header.php";
$sidebar_path = $root."admin-includes/sidebar.php";
$topbar_path = $root."admin-includes/topbar.php";
$footer_path = $root."admin-includes/footer.php";
?>
<style>
    .form-repeater-container{
        display: none;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<?php  require  $header_path?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- SIDEBAR -->
    <?php  require    $sidebar_path;?>
    <!-- END SIDEBAR -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php  require   $topbar_path;?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php

                    $data = new Project();
                    $projects_with_type = $data->selctProjectWithType();

//              ADD PROJECT PROCESS
                if (isset($_POST['add_project'])){

                    $images = $_FILES['images'];
                    $id = rand(10,1000);

//                    if checked gallery
                    if(isset($_POST['checked']) && $_POST['checked'] == 'on'){
                        if (!empty($images)) {
                            $img_name = array_filter($images['name']);
                            $img_tmp = array_filter($images['tmp_name']);

                            //INSERT IMAGES TO DATABASE
                            foreach ($img_name as $image_name){
                                $gallery_inputs = [
                                    'project_id' => $id,
                                    'photo' => $image_name,
                                    'photo_status' => 1
                                ];
                                $data->insertProjectPhotos($gallery_inputs);
                            }

                            // MOVE PHOTO PROCESS
                            $data->movePhotos($img_name,$img_tmp);
                        }
                    }


//                    print_r($images['name']);
//                    echo  "<br>";
//                    print_r($images['tmp_name']);
//                    echo  "<br>";
//                    echo  "<br>";
//                    echo  "<br>";
//                    echo  "<br>";
//                    echo  "<br>";
//                    echo  "<pre>";
//                    print_r($images['name']);
//                    echo  "</pre>";
//
//                    die;


//
//                    $result = array_merge($img_name, $img_tmp);
//
////                   echo count($result);die;
//
//                   for ($i =0 ; $i < count($result); $i++){
//                       $image_name ="";
//                       $image_tmp = "";
//                       if($i < count($result)/2){
//                            $image_name .= $result[$i];
//
//                       } else{
//                           $image_tmp .= $result[$i];
//
//                       }
//
//                       $image_folder = "/var/www/html/enad-abuzaid/img/projects/gallery/".$image_name;
//                       move_uploaded_file($image_tmp, $image_folder);
//                   }
//                   die;
                    //                    foreach (array_filter($images['tmp_name']) as $image_tmp){
//                        $image_folder = "/var/www/html/enad-abuzaid/img/projects/gallery/".$image_name;
//                        move_uploaded_file($image_tmp, $image_folder);
//
//                    }
//
//                    for ($i = 0 ; $i > count(array_filter($images['name'])); $i++){
//
//                    }




                    //MOVE COVER PHOTO PROCESS
                    $filename = $_FILES["project_cover"]["name"];
                    $tempname = $_FILES["project_cover"]["tmp_name"];
                    $folder = "/var/www/html/enad-abuzaid/img/projects/covers/".$filename;

                    move_uploaded_file($tempname, $folder);

                    $inputs = [
                            'project_id' => $id,
                            'project_title' => $_POST['project_title'],
                            'project_cover' => "projects/covers/".$filename,
                            'project_type' => $_POST['project_type'],
                            'project_status' => $_POST['project_status'],
                            'project_date' => $_POST['project_date'],
                            'project_client' => $_POST['project_client'],
                            'project_code' => $_POST['project_code'],
                            'project_tool' => $_POST['project_tool'],
                            'project_demo' => $_POST['project_demo'],
                            'project_screen' => $_POST['project_screen'],
                            'project_breif'=>"test"
                    ];


                    $data->insertProject($inputs);

                }


//                TRASH PROJECT PROCESS
                if(isset($_POST['trash_project'])){
                    $project_id = $_POST['project_id'];

                    if($data->trashedProject($project_id)){
                        $message = "Project trashed successfully !!";
                        $message_color ="warning";
                    }
                }

//                RETURN PROJECT PROCESS
                if (isset($_POST['return_project'])){
                    $project_id = $_POST['project_id'];
                    if($data->returnProject($project_id)){
                        $message = "Project returned  successfully !!";
                        $message_color ="info";
                    }
                }

//                DELETE PROJECT PROCESS
                if (isset($_POST['delete_project'])){
                    $project_id = $_POST['project_id'];
                    if($data->deleteProject($project_id)){
                        $message = "Project deleted  successfully !!";
                        $message_color ="danger";
                    }
                }


                ?>
                <a href="#" class="btn-sm btn-primary btn-icon-split mb-4 text-right" data-toggle="modal" data-target="#addModal">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                        </span>
                    <span class="text">Add Project</span>
                </a>

                <!-- Add  Modal-->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <label class="text-primary" for="project_title">project title</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_title" name="project_title" required
                                                       placeholder="Enter project name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="text-primary" for="project_cover">project cover</label>
                                            <div class="form-group">
                                                <input type="file" class="form-control form-control-user"
                                                       id="project_cover" name="project_cover" required
                                                       placeholder="Enter Email Address...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <?php
                                                $project_type = new Project();
                                                $types = $project_type->selectProjectType();
                                            ?>
                                            <label class="text-primary" for="inputState">project type</label>
                                            <div class="form-group">
                                                <select id="inputState" class="form-control" name="project_type">
                                                    <option selected>Choose...</option>
                                                    <?php foreach ($types as $type) { ?>
                                                    <option value="<?php echo $type['project_type_id']?>"><?php echo $type['project_type_name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="text-primary" for="status">project status</label>
                                            <div class="form-group">
                                                <select id="status" class="form-control" name="project_status">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="text-primary" for="project_breif">project Brief</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="project_breif" id="project_breif" rows="3"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="text-primary" for="project_date">project date</label>
                                            <div class="form-group">
                                                <input type="date" class="form-control form-control-user"
                                                       id="project_date" name="project_date"
                                                       placeholder="Enter date for project...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="text-primary" for="project_client">project client</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_client" name="project_client"
                                                       placeholder="Enter who is the client..">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="text-primary" for="project_tool">project tools</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_tool" name="project_tool"
                                                       placeholder="Enter tools for project..">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="text-primary" for="project_demo">project demo link</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_demo" name="project_demo"
                                                       placeholder="Enter demo link...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="text-primary" for="project_code">project code link</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_code" name="project_code"
                                                       placeholder="Enter code link...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="text-primary" for="project_screen">project screenshot link</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                       id="project_screen" name="project_screen"
                                                       placeholder="Enter screenshot link...">
                                            </div>
                                        </div>
                                    </div>


                                        <input type="checkbox" class="" id="gallery" name="checked">
                                        <label for="horns">Have Gallery</label>

                                        <div class="form-repeater-container" id="form-repeater">
                                            <div class="row mt-5 mb-5">
                                                <div class="col">
                                                        <div class="form-group fieldGroup mt-3" style="">
                                                            <div class="input-group">
                                                                <input type="file" name="images[]" class="form-control" placeholder="upload image" />
                                                            </div>
                                                        </div>

                                                        <a href="javascript:void(0)" class="btn btn-success addMore float-end mt-3">+ Add</a>

                                                    <div class="form-group fieldGroupCopy" style="display: none;">
                                                        <div class="input-group mt-2">
                                                            <input type="file" name="images[]" class="form-control" placeholder="upload image" />
                                                            <div class="input-group-addon">
                                                                <a href="javascript:void(0)" class="btn btn-danger remove">Delete</i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>


                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" name="add_project">Add Project</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END ADD MODAL -->

                <!-- success message  -->
                <?php

                if(isset($message)){

                    ?>
                    <div class="alert alert-<?php echo $message_color ?> alert-dismissible fade show" role="alert">
                        <strong><?php echo $message; ?></strong> You should check it. please refresh the page.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>project title</th>
                                    <th>project type</th>
                                    <th>project cover</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php
                                $i=1;

                                if(!empty($projects_with_type)){
                                foreach($projects_with_type as $project){
                                    ?>

                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $project['project_title'];?></td>
                                        <td>
                                            <a href="<?php echo  "project_by_type.php?type_id=".$project['project_type_id']?>">
                                                <?php echo $project['project_type_name'];?>
                                            </a>
                                        </td>

                                        <td style="width: 150px;height=150px"><img height="100%" width="100%" src="<?php echo 'http://localhost/enad-abuzaid/img/'.$project['project_cover'];?>"  alt="<?php echo $project['project_cover'];?>"></td>

                                        <td >
                                            <?php
                                            if($project['project_status'] == 1) {
                                                $class="success"; $status="Active";
                                            } elseif ($project['project_status'] == 2){
                                                $class="warning"; $status="Trashed";
                                            } else {
                                                $class="danger"; $status="Deactive";
                                            }
                                            ?>
                                            <span class="badge rounded-pill bg-<?php echo $class;?>  text-gray-100"><?php echo $status;?></span>
                                        </td>



                                        <td>

<!--                                            <form action="project_details.php" method="post" id="details_form" style="display: inline;">-->
<!--                                                <input type="hidden" value="--><?php //echo $project['project_id'] ?><!--" name="project_id">-->
<!--                                                <input type="submit" class="btn btn-primary btn-icon-split" value="details">-->
<!--                                            </form>-->

<!--                                            <a href="#" class="btn-sm btn-warning btn-icon-split" data-toggle="modal" data-target="#deleteModal--><?php // echo  $project['project_id'];?><!--">-->
<!--                                                <span class="icon text-white-50">-->
<!--                                                    <i class="fas fa-exclamation-triangle"></i>-->
<!--                                                </span>-->
<!--                                                <span class="text">Trash</span>-->
<!--                                            </a>-->
                                        <?php
                                            if ($project['project_status'] == 2)
                                            {
                                           ?>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#returnModal<?php echo $project['project_id'] ?>"
                                                    title="return">
                                                <i class="fas fa-undo"></i>
                                            </button>
                                        <?php
                                            } else {
                                        ?>
                                             <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                     data-target="#deleteModal<?php echo $project['project_id'] ?>"
                                                     title="trash">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                             </button>
                                        <?php
                                            }
                                        ?>

                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{ $grade->id }}"
                                                    title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>


                                            <!-- return Modal-->
                                            <div class="modal fade" id="returnModal<?php echo $project['project_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure want <b class="text-info">RETURN</b> this?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <form action="protfolio_view.php" method="post">
                                                                <input type="hidden" id="" value="<?php echo $project['project_id'] ?>" name="project_id">
                                                                <input type="submit" name="return_project" value="return" class="btn btn-info">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- delete Modal-->
                                            <div class="modal fade" id="deleteModal<?php echo $project['project_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure want <b class="text-warning">TRASHED</b> this?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                                                <input type="hidden" id="" value="<?php echo $project['project_id'] ?>" name="project_id">
                                                                <input type="submit" name="trash_project" value="Trash" class="btn btn-warning">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>




                                <?php
                                    }
                                 }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // max of form
        var maxGroup = 100;

        //process
        $(".addMore").click(function() {
            if ($('body').find('.fieldGroup').length < maxGroup) {
                var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });

        //remove form
        $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
        });
    });


    const formContainer = document.querySelector('.form-repeater-container');
    document.querySelector("input[name='checked']").onchange = function() {
        if(this.checked)
            formContainer.style.display = 'block';
        else
            formContainer.style.display = 'none';

    };
</script>

<?php  require   $footer_path;?>
