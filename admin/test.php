<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Multiple Input Form</h1>
    <div class="row mt-5 mb-5">
        <div class="col">
            <form method="post" action="">
                <div class="form-group fieldGroup mt-3" style="display: none;">
                    <div class="input-group">
                        <input type="text" name="name[]" class="form-control" placeholder="Name" />
                        <input type="text" name="Address[]" class="form-control" placeholder="Address" />
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save" />
                <a href="javascript:void(0)" class="btn btn-success addMore float-end mt-3">+ Add</a>

            </form>
            <div class="form-group fieldGroupCopy" style="display: none;">
                <div class="input-group mt-2">
                    <input type="text" name="name[]" class="form-control" placeholder="Name" />
                    <input type="text" name="Address[]" class="form-control" placeholder="Address" />
                    <div class="input-group-addon">
                        <a href="javascript:void(0)" class="btn btn-danger remove">Delete</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $Address = $_POST['Address'];
    if (!empty($name)) {
        for ($a = 0; $a < count($name); $a++) {
            if (!empty($name[$a])) {
                $names = $name[$a];
                $Addresses = $Address[$a];

                //show the data
                echo "<div class='container'> $names  $Addresses </br> </div>";
            }
        }
    }
}
?>