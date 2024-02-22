<?php 
    require_once("./controllers/controller.php");
    $controller = new controller();

    if(isset($_GET['tambah_data'])){
        $controller->viewAdd();

    }else if(isset($_GET['update'])){
        $id = $_GET['update'];
        $controller->viewUpdate($id);

    }else if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $controller->deleteData($id);
    }else{
        $controller->index();
    }

?>