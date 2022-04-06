<?php
require './Project.php';
$path = new Project();

$data = new Project();


$single = $data->viwSingleProject($_GET['id']);
print_r($single);
foreach ($single as $details){
    $title = $details['project_title'];
    $cover = $details['project_cover'];
}

//print_r($single);die;
//$root = '../';
//$header_path = $root."admin-includes/header.php";
//$sidebar_path = $root."admin-includes/sidebar.php";
//$topbar_path = $root."admin-includes/topbar.php";
//$footer_path = $root."admin-includes/footer.php";
//$logout_path = $root."admin-includes/logout-modal.php";
//$scroll_to_path = $root."admin-includes/scroll-top.php";
//$copy_right_path = $root."admin-includes/copy-right.php";
?>

<?php $path->ProjectPath('header')?>
<body id="page-top">
<style>
    .show-details li{
      font-weight: bold;
      font-size: 1.2rem;
    }
</style>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- SIDEBAR -->
    <?php $path->ProjectPath('sidebar')?>

    <!-- END SIDEBAR -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->

            <?php $path->ProjectPath('topbar')?>



            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title;?></h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4 text-center" style="min-height: 60vh;width: 100%">
                                    <div class="card-body">
                                        <img src="../../img/<?php echo $cover?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="card mb-4" style="min-height: 60vh;width: 100%">
                                    <div class="card-body">
                                        <ul class="show-details">
                                            <li>project description :</li>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci, at corporis deleniti distinctio et fugiat harum illo laboriosam laborum minima nam natus officiis, qui, quod similique sunt totam veniam.</p>

                                            <li>Date :</li>
                                            <p>01-04-2022</p>

                                            <li>client :</li>
                                            <p>amman company</p>

                                            <li>tools :</li>
                                            <p>html,css,js</p>

                                            <li>code :</li>
                                            <a href="#" class="card-links">http://localhost/enad-abuzaid/</a>

                                            <li>demo :</li>
                                            <a href="#" class="card-links">http://localhost/enad-abuzaid/</a>

                                            <li>screenshot links :</li>
                                            <a href="#" class="card-links">http://localhost/enad-abuzaid/</a>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Default Card Example -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        image-1
                                    </div>
                                    <div class="card-body">
                                        <img src="../../img/projects/gallery/ezgif.com-gif-maker%20(3).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php  $path->ProjectPath('copy-right')?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<?php  $path->ProjectPath('scroll-top')?>

<!-- Logout Modal-->
<?php  $path->ProjectPath('logout-modal')?>


<?php  $path->ProjectPath('footer')?>

