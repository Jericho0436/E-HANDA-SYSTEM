<!doctype html>
<html lang="en">
  <head>
  <link href="../asset/img/background/login-logo.png" width="200" height="121" rel="icon">  
    <!--CSS-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--SCRIPTS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <title>EDIT-ADMIN</title>
 </head>
 <body>
  <br>
  &nbsp;
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">EDIT DATA</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php
              require '../class/db_admin.php';
              require '../head/header.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['bday'])  && isset($_POST['address'])) {
                  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile'])  && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['bday']) && !empty($_POST['address']) ) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['lastname'] = $_POST['lastname'];
                    $data['age'] = $_POST['age'];
                    $data['bday'] = $_POST['bday'];
                    $data['mobile'] = $_POST['mobile'];
                    $data['email'] = $_POST['email'];
                    $data['address'] = $_POST['address'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>
                                 Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Saved Successfully',
                                showConfirmButton: false,
                                timer: 1000
                              }).then(function() {
                                window.location.href = '../admin_page.php#portfolio';
                              });
                              </script>";          
                          
                      
                    }else{
                      echo "<script>
                                 Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Unsucessfull',
                                showConfirmButton: false,
                                timer: 1000
                              }).then(function() {
                                window.location.href = '../admin_page.php#portfolio';
                              });
                              </script>";  
                    }
 
                  }else{
                    echo "<script>
                                 Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Empty',
                                showConfirmButton: false,
                                timer: 1000
                              })
                              </script>";  
                    header("Location: ../admin_page.php#portfolio?id=$id");
                  }
                }
              }
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Firstname</label>
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Lastname</label>
              <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input type="text" name="age" value="<?php echo $row['age']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Birthday</label>
              <input type="date" name="bday" value="<?php echo $row['bday']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="tel" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group"> 
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
              <a href="../admin_page.php#portfolio" class="btn btn-danger">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>