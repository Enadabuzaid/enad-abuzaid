<?php require 'about-section/Skill.php'; ?>
<?php $title = "skill Page"; ?>
<?php  require 'admin-includes/header.php';?>


<?php 
  $data = new Skill();

  if(isset($_POST['add_skill'])){
    $skill_data = [
      "skill_name" => $_POST['skill_name'],
      "skill_progress" => $_POST['skill_progress'],
      "skill_icon" => $_POST['skill_icon'],
      "skill_status" => 1
    ];

    if($data->insertData($skill_data)){
      $message = "Skill {$skill_data['skill_name']} Added Succefully .. ";
      $message_color ="success";
      // header('Refresh: 3');
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

            <!-- Begin Page Content -->
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
            <div class="container-fluid">
            <a href="#" class="btn-sm btn-primary btn-icon-split mb-4 text-right" data-toggle="modal" data-target="#addModal">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>                      
                        </span>
                        <span class="text">Add Skill</span>
            </a>
            <!-- Add  Modal-->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Skill..</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                <div class="form-group">
                                  <label for="name">Skill Name</label>
                                  <input type="text" class="form-control" id="name" name="skill_name"  placeholder="Enter Skill name">
                                </div>
                                <div class="form-group">
                                  <label for="progress">Skill Progress</label>
                                  <input type="range" class="form-control" id="progress" name="skill_progress"  placeholder="Enter Skill Progress">
                                </div>
                                <div class="form-group">
                                  <label for="icon">Skill Icon</label>
                                  <input type="text" class="form-control" id="icon" name="skill_icon"  placeholder="Enter Skill icon">
                                  <small id="icon" class="form-text text-muted">just add the classs in fontawsome here .</small>
                                </div>
                        </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" name="add_skill">Add Skill</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php 
              $skills = $data->selectData();
              foreach($skills as $skill){
                $skill_id =  $skill['skill_id'];
                $skill_name = $skill['skill_name'];
                $skill_progress = $skill['skill_progress'];
                $skill_icon = $skill['skill_icon'];
                $skill_status = $skill['skill_status'];

                $colors = ['info','success','primary','warning','danger','pink','green','lg-blue','pourple'];
                
                $color_key = array_rand($colors);

              
                
            ?>
            <div class="row">
                <div class="col-xl-10 col-md-10 mb-4">
                            <div class="card border-left-<?php echo $colors[$color_key] ?> shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-<?php echo $colors[$color_key] ?> text-uppercase mb-1"><?php echo $skill_name ?>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $skill_progress ?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-<?php echo $colors[$color_key] ?>" role="progressbar"
                                                            style="width: <?php echo $skill_progress ?>%" aria-valuenow="<?php echo $skill_progress ?>" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class=" <?php echo $skill_icon ?> fa-2x text-<?php echo $colors[$color_key] ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-xl-2 col-md-2 ">
                  <?php 
                    if($skill_status == 1 ){
                      echo '<span class="badge badge-success">Active</span>';
                    } else {
                      echo '<span class="badge badge-danger">Inactive</span>';
                    }
                  ?>
                  <a href="" class="btn btn-sm btn-info text-dark"><i class="fas fa-edit"></i></a>
                  <a href="" class="btn btn-sm btn-warning text-dark"><i class="fas fa-trash-alt"></i></a>

                </div>
                </div>
            <?php }?>
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

    <?php  require 'admin-includes/footer.php';?>
