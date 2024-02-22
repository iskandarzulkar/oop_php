<?php require_once("componen/header.php") ?>
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group md-3">
            <label>Nama Customer</label>
            <input type="text" class="form-control" name="nama_customer" placeholder="Enter Nama Customer">       
        </div>
        <div class="form-group md-3">
            <label >Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group md-3">
            <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
        </div>
    </form>
    </div>
<?php require_once("componen/footer.php") ?>

<?php

    if(isset($_POST['simpan'])){
        $controller = new controller();
        $controller->addData();
    }

?>