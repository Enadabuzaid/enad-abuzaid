<?php
require './Project.php';
$root = '../';
$header_path = $root."admin-includes/header.php";
$sidebar_path = $root."admin-includes/sidebar.php";
$topbar_path = $root."admin-includes/topbar.php";
$footer_path = $root."admin-includes/footer.php";
?>

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

                    print_r($projects_with_type);



                ?>

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

                                            <form action="project_details.php" method="post" id="details_form" style="display: inline;">
                                                <input type="hidden" value="<?php echo $project['project_id'] ?>" name="project_id">
                                                <input type="submit" class="btn btn-primary btn-icon-split" value="details">
                                            </form>


                                        </td>
                                    </tr>
                                <?php }?>
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




<?php  require   $footer_path;?>
