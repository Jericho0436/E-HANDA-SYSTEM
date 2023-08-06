<?php
$conn = mysqli_connect('localhost','user','user','user_db');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="asset/img/background/login-logo.png" width="200" height="121" rel="icon">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="asset/css/registration.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" method="post" class="sign-in-form">

            <?php
            @include 'validation/login_validation.php';
              if(isset($error)){
                foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
            };
          };
         ?>

                <h4 class="title">Login to your Account</h4>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Email" name="email"required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password"required>
                </div>
                <input type="submit" value="Login" name="submit" class="btn"><br>
                <div>
                <h5>Don't have an Account?<a href="#" id="sign-up-btn" style="color: darkblue; margin-bottom: -30%;"> Register</a></h5>
                </div>
                
                
            </form>


            <form action="" method="post" class="sign-up-form">
 
            <?php
            
          require 'validation/register_validation.php';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        
        ?>

                <h2 class="title">Create an Account</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="name"required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password"  id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <span id="passwordErr" class="error"></span>
                </div>
                <div class="input-field">
                <i class="fa-solid fa-user-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>
                    <span id="confPassErr" class="error"></span>
                </div>
                
                <select name="user_type" class="input-field" required>
                  <option  value="">Select Role</option>
                  <option  value="user">User</option>
                  <option  value="admin">Admin</option>
                </select>
    

                <input type="submit" value="Register" name="register" class="btn"><br>
                <div>
                <h5>Have an Account?<a href="#" id="sign-in-btn" style="color: darkblue;"> Login</a></h5>
                </div>
                
                
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <script src="asset/js/pass.js"></script>
        
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Developer</h3>
                    <h5>&copy; 2-CS3 - Group 8</h5>
                   
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                  
                    <div class="imgcontainer">
                    <img src="asset/img/background/E-HANDA.png" alt="Avatar" class="avatar">
                    </div>           
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
            
        </div>

    </div>
    <script src="asset/js/app.js"></script>
</body>
</html>