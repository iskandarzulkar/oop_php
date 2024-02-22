<?php require_once("componen/header.php") ?>


<div class="container">

    <a class="btn btn-success pull-right" href="index.php?tambah_data">
        Add
    </a>

    <?php
        if(isset($_GET['message'])){
    ?>
            <script language="javascript" type="text/javascript" >
            alert("<?=$_GET['message']?>");
            </script>
    <?php
        }
    ?>

    <?php
        if(isset($_GET['failed'])){
    ?>
            <script language="javascript" type="text/javascript" >
            alert("<?=$_GET['failed']?>");
            </script>
    <?php
        }
    ?>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Customer</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $no = 1;
            foreach($data as $datas){

                if($datas['status'] == '1'){
                    $status = 'Active';
                }else{
                    $status = 'Non Active';
                }
                echo '<tr>';
                echo '<th>'. $no .'</th>';
                echo '<td>'. $datas['nama_customer'].'</td>';
                echo '<td>'. $datas['email'].'</td>';
                echo '<td>'. $status.'</td>';
                echo '<td><a class="btn btn-primary pull-right" href="index.php?update='.$datas['id'].'">Update</a></td>';
                echo '<td><a class="btn btn-danger pull-right" href="index.php?delete='.$datas['id'].'">Delete</a></td>';
                echo '</tr>';
            }
        ?>  
       
      </tbody>
    </table>
</div>

<?php require_once("componen/footer.php") ?>
  