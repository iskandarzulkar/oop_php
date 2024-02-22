<?php
    require_once('config/db.php');

    class model extends db{

        function __construct()
        {
            parent::__construct();
        }

        public function execute($query) 
        {
            $result = $this->connection->query($query);
            
            if ($result == false) {
                echo 'Error: cannot execute the command';
                return false;
            } else {
                return true;
            }		
        }

        public function getAllData()
        {
            $query = "select * from tbl_customer";
            $result = $this->connection->query($query);
            return $result;
        }

        function addDataCustomer($nama_customer, $email)
        {
            $result = $this->connection->query("INSERT INTO tbl_customer(nama_customer,email) VALUES('$nama_customer','$email')");

            return $result;
        }
        
        function selectById($id)
        {
            $data = $this->connection->query("SELECT * FROM tbl_customer WHERE id = '$id'");
            $result  = mysqli_fetch_assoc($data);
          
            return $result;
        }

        function updateCustomer($id, $nama_customer, $email)
        {
            $query = "update tbl_customer set nama_customer='$nama_customer', email='$email' where id='$id'";
            return $this->connection->query($query);
        }

        function deleteData($id)
        {
            $query = "delete from tbl_customer where id='$id'";
            return $this->connection->query($query);
        }

    }

   
?>