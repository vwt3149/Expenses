<?php include"functions/functions.php" ?>
<?php
        session_start();
        sessionValidation(isset($_SESSION['em']));
?>
    
    <?php
        error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
        
    ?>
    
    <?php
        if(isset($_POST['btn_reg'])){
            

            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $passwordR = $_POST['passR'];
            
    
            $host = "localhost";
            $server_username = "root";
            $server_pass = "";
            $base = "budget_app";
    
            $nameERROR = "";
            $emailERROR = "";
            $passwordERROR = "";
            
            if(empty($fName) || $fName == "" || empty($lName) || $fName == "" ){
              $nameERROR = "Name can not be empty!";
              echo "<script>
              alert('Username error: $nameERROR');
              window.location.assign('register.php');
              </script>"; 
           } else {
             if (!preg_match("/^[a-zA-Z ]*$/",$fName) || !preg_match("/^[a-zA-Z ]*$/",$lName)) {
                  $nameERROR = "Only letters and white space allowed!";
                  echo "<script>
              alert('Username error: $nameERROR');
              window.location.assign('register.php');
              </script>";
              }
           }
      
           if(empty($email) || $email == ""){
               $emailERROR = "Email can not be empty!";
               echo "<script>
              alert('E-mail error: $emailERROR');
              window.location.assign('register.php');
              </script>";
           } else {
             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailERROR = "Invalid email format!";
                  echo "<script>
              alert('E-mail error: $emailERROR');
              window.location.assign('register.php');
              </script>";
              }
           }
      
           if(empty($password) || $password == ""){
               $passwordERROR = "Password can not be empty!";
               echo "<script>
              alert('Password error: $passwordERROR');
              window.location.assign('register.php');
              </script>";
           }
             if(empty($nameERROR) && empty($emailERROR) && empty($passwordERROR)){
                
                $link = mysqli_connect($host, $server_username, $server_pass);
                userValidation( $link, $base);
                if($link){
                    if(mysqli_select_db($link,$base)){
                        $query = mysqli_query($link,"INSERT INTO users(first_name, last_name, _password, email) VALUES('".$fName."', '".$lName."', '".$password."', '".$email."')");
                        if($query){
                              $_SESSION['em'] = $email;
                              header('Location: index.php');
                            }
                    } else {
                        echo '<div class="alert alert-danger">
                                    <strong>Error message:</strong> Can not select database.
                              </div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">
                                <strong>Error message:</strong> Can not connect to database.
                          </div>';
                }
             } 
        }
    ?>
    

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-gray-900"></div>
          <div class="col-lg-7">
            <div class="p-5" style="height: 600px">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="register.php" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="fName" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lName" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passR" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account" name="btn_reg">
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
