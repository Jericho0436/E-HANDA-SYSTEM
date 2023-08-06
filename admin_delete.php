<?php 

    include '../head/header.php';
    require '../class/db_admin.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);

    if ($delete) {
      header('location: ../admin_page.php');
    }
 ?>
</html>