<?php require 'about-section/Paragraph.php'; ?>
<?php  require 'admin-includes/header.php';?>

<script>


    function setId(id){
    // document.querySelector("#id").innerHTML = id;
    document.getElementById("para_id").value = id;

}

function setReturnId(id){
    // document.querySelector("#id").innerHTML = id;
    document.getElementById("para_id_return").value = id;

}

</script>
<?php 
$data = new Paragraph();
$paragraphs = $data->selectData();

if(isset($_POST['add_paragraph'])){

    $para_body = $_POST['paragraph'];
    $insert_data = [
        'paragraph_body' => $para_body,
        'paragraph_status' => 1
    ];

    if($data->insertData($insert_data)){
        $message = "Paragraph Added Succefully .. ";
        $message_color ="success";
        header('Refresh: 3');
    }

}

if(isset($_POST['update_paragraph'])){
    $paragraph_body = $_POST['paragraph_body'];
    $paragraph_status = $_POST['paragraph_status'];
    $paragraph_id = $_POST['para_id'];

    $update_data = 
        [
            "paragraph_id" => $paragraph_id,
            "paragraph_body" => $paragraph_body,
            "paragraph_status" =>$paragraph_status
        ];

    if($data->updateData($update_data)){
        $message = "Paragraph updated succefully !!";
        $message_color ="success";
        header('Refresh: 3');
    }
}

if(isset($_POST['delete_paragraph'])){
    $para_id =$_POST['para_id'];

    if($data->deleteData($para_id)){
        $message = "Paragraph deleted !!";
        $message_color ="danger";
        header('Refresh: 3');

    }
}

if(isset($_POST['return_paragraph'])){
    $para_id =$_POST['para_id'];

    if($data->returnData($para_id)){
        $message = "Paragraph returned !!";
        $message_color ="warning";
        header('Refresh: 3');

    }
}
?>



<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SIDEBAR -->
        <?php  require 'admin-includes/sidebar.php';?>   
        <!-- END SIDEBAR -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- Topbar -->
            <?php  require 'admin-includes/topbar.php';?>
            <!-- End of Topbar -->

            <!-- success message  -->
            <?php 

                if(isset($message)){

            ?>
                <div class="alert alert-<?php echo $message_color ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $message; ?></strong> You should check it.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <a href="#" class="btn-sm btn-primary btn-icon-split mb-4 text-right" data-toggle="modal" data-target="#addModal">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>                      
                        </span>
                        <span class="text">Add Paragraph</span>
                    </a>
                    <?php
                        $i=1;
                        if(empty($paragraphs)){
                            echo "<div class='alert alert-danger' role='alert'>No paragraph yet!!. add new one .</div>";
                        }
                        foreach($paragraphs as $paragraph){
                        

                            if($paragraph['paragraph_status'] == 1){
                                    $status = "Ative";
                                    $bg = "success";
                                    $text = "primary";

                                } else {
                                    $status = "Deleted";
                                    $bg = "danger";
                                    $text = "danger";

                            }
                    ?>
<!-- Dropdown Card Example -->
                    <div class="card shadow mb-4 border-left-<?php echo $bg ?>">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-<?php echo $text ?>">paragraph <?php echo $i++ ; ?></h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Actions:</div>
                                            <a  href="about-section-paragraph-edit.php?id=<?php echo $paragraph['paragraph_id'] ?>" class="dropdown-item" >Edit</a>  
                                            <?php if(isset($status) && $status =="Deleted"){ ?>
                                                <a onclick="setReturnId(<?php echo $paragraph['paragraph_id'] ?>)" class="dropdown-item text-warning" data-toggle="modal"  data-target="#returnModal" href="javascript:void(0)">Return</a>       
                                            <?php } else {?>
                                            <a onclick="setId(<?php echo $paragraph['paragraph_id'] ?>)" class="dropdown-item text-danger" data-toggle="modal"  data-target="#deleteModal" href="javascript:void(0)">Delete</a>  
                                            <?php } ?>     
                                            <div class="dropdown-divider"></div>
                                            <span class="badge rounded-pill bg-<?php echo $bg ?> ml-4 text-gray-100"><?php echo $status; ?></span> 
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php echo $paragraph['paragraph_body'];?>
                                </div>
                    </div>
                    <?php 
                        }
                    ?>







                    
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


    <!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want <b class="text-danger">DELETE</b> this?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" id="para_id" value="" name="para_id">
                        <input type="submit" name="delete_paragraph" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- return Modal-->
    <div class="modal fade" id="returnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want <b class="text-warning">RETURN</b> this?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" id="para_id_return" value="" name="para_id">
                        <input type="submit" name="return_paragraph" value="Return" class="btn btn-warning">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Add  Modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Paragraph..</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="paragraph"></textarea>
                        </div>
                </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="add_paragraph">Add Paragraph</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

                    




<?php  require 'admin-includes/footer.php';?>
