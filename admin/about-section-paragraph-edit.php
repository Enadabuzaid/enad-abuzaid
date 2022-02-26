<?php require 'about-section/Paragraph.php'; ?>
<?php  require 'admin-includes/header.php';?>
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

              <?php
                $id = $_GET['id']; 
                $data = new Paragraph();
                $paragraph = $data->selectData("`paragraph_id` = {$id}");
                $p_id = $paragraph[0]['paragraph_id'];
                $p_text = $paragraph[0]['paragraph_body'];
                $p_status = $paragraph[0]['paragraph_status'];

                if($p_status == 1 ){
                  $text = "Active";
                  $text_color = "success";
                } else{
                  $text = "Inactive";
                  $text_color = "danger";
                }


                
              ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Default Card Example -->
                    <div class="card mb-4">
                        <div class="card-header text-<?php echo $text_color ?>">
                            Paragraph  <?php echo $p_id; ?>
                        </div>
                        <div class="card-body">
                          <form action="about-section-paragraph-view.php" method="post">
                            <input type="hidden" name="para_id" value="<?php echo $p_id ?>">
                            <div class="form-group">
                                <textarea class="form-control"  id="para_body_edit" rows="4" name="paragraph_body"><?php echo $p_text ?></textarea>
                            </div>
                            
                            <div class="form-group">
                                <select class="custom-select" name="paragraph_status">
                                    <option value="<?php echo $p_status ?>"><?php echo $text ?></option>
                                    <option value="<?php echo $p_status == 0 ?  1 : 0 ?>"><?php echo $p_status == 0 ?  "Active" : "Inactive" ?></option>
                                </select>
                            </div>

                            <input type="submit" name="update_paragraph" value="Update" class="btn btn-primary">
                          </form>
                        </div>
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
        aria-hid0den="true">
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
