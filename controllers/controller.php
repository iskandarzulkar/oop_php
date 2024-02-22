<?php
    require_once('models/model.php');

    class controller
    {
        public $model;
      

        public function __construct()
        {
            $this->model = new model();
        }

        public function index(){
            $data = $this->model->getAllData();
            require_once("view/index.php");
        }

        public function viewAdd()
        {
            require_once('view/add.php');
        }

        public function addData()
        {
            $nama_customer    = $_POST['nama_customer'];
            $email            = $_POST['email'];

            $data = $this->model->addDataCustomer($nama_customer, $email);

            if($data){
                header("location:index.php?message=Data Berhasil Di Tambahkan");
            }else{
                header("location:index.php?failed=Data Gagal Di Tambahkan");
            }

        }

        public function viewUpdate($id)
        {
            $data   = $this->model->selectById($id);
            require_once('view/update.php');
        }

        public function updateCustomer()
        {
            $id               = $_POST['id'];
            $nama_customer    = $_POST['nama_customer'];
            $email            = $_POST['email'];

            $data = $this->model->updateCustomer($id, $nama_customer, $email);
            if($data){
                header("location:index.php?message=Update Data Berhasil");
            }else{
                header("location:index.php?failed=Update Data Gagal");
            }
        }

   
        public function deleteData($id)
        {
            $data = $this->model->deleteData($id);
            if($data){
                header("location:index.php?message=Delete Data Berhasil");
            }else{
                header("location:index.php?failed=Update Data Gagal");
            }
        }
    }

?>