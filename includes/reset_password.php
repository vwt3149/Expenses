<?php session_start(); ?>
<?php include'../functions/queries.php'; ?>
<?php   
        
?>
<?php
    $newPassword = $_POST['profNewPass'];
    $oldPassword = $_POST['profOldPass'];
    $newFirstName = $_POST['profName'];
    $newLastName= $_POST['profLastName'];
    $newEmail= $_POST['profEmail'];
    if ($oldPassword === $password ) {
        if ($link) {
            $query = mysqli_query($link,"UPDATE users 
            SET 
            first_name= '".$newFirstName."',
            last_name= '".$newLastName."',
            _password='".$newPassword."',
            email= '".$newEmail."'
            WHERE id= '".$id."';
            "); 
             if($query){ 
                $_SESSION['em'] = $newEmail;
                header('Location: ../profile.php');
                return '<div class="alert alert-danger">
                                    <strong>Error message:</strong> Can not select database.
                              </div>';
                
              } else{
                header('Location: ../profile.php');
                
              }
        }
    }else{
        header('Location: ../profile.php');
    }
       
   
?>