<!DOCTYPE html>
<html lang="en">
<?php
    define('AD_PATH' , "http://localhost/enad-abuzaid/admin/");
    define('SR_PATH' , "http://localhost/enad-abuzaid/admin/services-section/"); // service section
    define('PORT_PATH' , "http://localhost/enad-abuzaid/admin/protfolio-section/"); // protofolio section
    define('PROJECT_PATH' , "http://localhost/enad-abuzaid/admin/"); // protofolio section

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo  isset($title) ?  $title :  "Default Page" ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo AD_PATH ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo AD_PATH ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo AD_PATH ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

