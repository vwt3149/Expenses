<?php
    function nameValidation($name,$firstLast = "First"){
        if(empty($name) || $name == ""){
            $nameERROR = "$firstLast name can not be empty!";
            echo "<script>
            alert('Username error: $nameERROR');
            window.location.assign('login.php');
            </script>"; 
     } else {
         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameERROR = "Only letters and white space allowed!";
              echo "<script>
            alert('Username error: $nameERROR');
            window.location.assign('login.php');
            </script>";
        }
     }
    }

    function emailValidation($email){
        if(empty($email) || $email == ""){
            $emailERROR = "Email can not be empty!";
            echo "<script>
           alert('E-mail error: $emailERROR');
           window.location.assign('login.php');
           </script>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $emailERROR = "Invalid email format!";
             echo "<script>
           alert('E-mail error: $emailERROR');
           window.location.assign('login.php');
           </script>";
       }
    }
    }

    function passwordValidation($password, $passwordRepet){
        if($passwordRepet === false){
            return;
        }
       else if(empty($password) || $password == ""){
            $passwordERROR = "Password can not be empty!";
            echo "<script>
           alert('Password error: $passwordERROR');
           </script>";
        return false;
        }
        else if ($password !== $passwordRepet) {
            $passwordERROR="Password need to be the same values";
         
        echo "<script>
        alert('Password error: $passwordERROR');
        </script>";
        return false;
        }else{
            return true;}
        
    }

    function userValidation( $link, $base){
        $row ="";
                if($link){
                    if(mysqli_select_db($link,$base)){
                        $query = mysqli_query($link,"SELECT email FROM users");
                        if($row = mysqli_num_rows($query)){
                             if ($row > 1) {
                                echo( '<div class="alert alert-danger ">
                                <strong>Error message:</strong> User already exist
                                </div>');
                             }
                            }
                    } 
                } 
    }

    function sessionValidation($session){
        if($session){
            header('Location: index.php');
        }
    }
    
     function selectOptionsQuery($link, $query)
    {
        $sql = "SELECT * FROM $query ORDER BY `id` ASC ";
        $query = mysqli_query($link,$sql);
         if(mysqli_num_rows($query) > 0){
             while($row = mysqli_fetch_assoc($query)){
              $html .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';     
             }
        }
        return $html;     
   
    }

    function addingExpenses($link,$uniqueId,$id)
    {
        $category = $_POST['category'];
            $textArea = $_POST['text_add'];
            $culture = $_POST['culture'];
            $cost = $_POST['price'];

            if ($link) {
                $query = mysqli_query($link,"INSERT INTO expenses (id, `description`, cost, category_id, culture_id, `user_id`) 
                VALUES('".$uniqueId."', '".$textArea."', '".$cost."', '".$category."','".$culture."', '".$id."')");
                if($query){ 
                  return '<div class="alert alert-success col-xl-12">
                    <strong>Success</strong> Data is submitted!
                    </div>
                    <script>setTimeout(()=>{
                        document.querySelector(".alert").remove();
                    },2000)</script>';
                } else{
                    '<div class="alert alert-danger col-xl-12">
                    <strong>Success</strong> Data is submitted!
                    </div>
                    <script>Error(()=>{
                        document.querySelector(".alert").remove();
                    },2000)</script>';
                  
                }
            }
    }

    function editingExpenses($link,$id)
    {
        $category1 = $_POST['category1'];
        $textArea1 = $_POST['text_add1'];
        $culture1 = $_POST['culture1'];
        $cost1 = $_POST['price1'];
        $editId =  $_POST['editId'];
       
          if ($link) {
            $query = mysqli_query($link,"UPDATE expenses 
            SET `description`= '".$textArea1."',
            cost= '".$cost1."',
            category_id='".$category1."',
            culture_id= '".$culture1."',
            created_at = NOW()
            WHERE id= '".$editId."' AND `user_id` = '".$id."';
            ");
            if($query){ 
                
              echo "<script>
              window.location.assign('expenses.php');
              </script>";
              
            } else{
              echo 'slabo';
              echo mysqli_error($link);
              
            }
           }
    }

    function deleteExpenses($link, $id){
        $editId =  $_POST['editId'];
               
                  if ($link) {
                    $query = mysqli_query($link,"DELETE FROM expenses 
                    WHERE id= '".$editId."' AND `user_id` = '".$id."';
                    ");
                    
                    if($query){ 
                      echo "<script>
                      window.location.assign('expenses.php');
                      </script>";
                    } else{
                      echo 'slabo';
                      echo mysqli_error($link);
                      
                    }
                }
    }


    function addGain($link,$uniqueId,$id)
    {
            $culture = $_POST['culture'];
            $class = $_POST['class'];
            $buyer = $_POST['buyer'];
            $weight = $_POST['weight'];
            $price =  $_POST['price'];
            $gainId = $uniqueId;
            if ($link) {
                 
                $query1 = mysqli_query($link,"INSERT INTO gain (id, culture_id, `user_id` ) 
                VALUES('".$gainId."', '".$culture."', '".$id."')
                ");
                $query2 = mysqli_query($link,"INSERT INTO product_sale (gain_id, buyer_id, class_id, `weight`, price )
                VALUES('".$gainId."', '".$buyer."', '".$class."', '".$weight."', '".$price."')
                ");
                mysqli_error($link);
                if($query1 && $query2){ 
                    mysqli_error($link);
                  return '<div class="alert alert-success col-xl-12">
                    <strong>Success</strong> Data is submitted!
                    </div>
                    <script>setTimeout(()=>{
                        document.querySelector(".alert").remove();
                    },2000)</script>';
                } else{mysqli_error($link);
                    '<div class="alert alert-danger col-xl-12">
                    <strong>Success</strong> Something went wrong!
                    </div>
                    <script>Error(()=>{
                        document.querySelector(".alert").remove();
                    },2000)</script>';
                  
                }
            }
            
    }
    function editingGain($link,$id)
    {
        $culture = $_POST['culture'];
        $class = $_POST['class'];
        $buyer = $_POST['buyer'];
        $weight = $_POST['weight'];
        $price =  $_POST['price'];
        $delEditId =  $_POST['delete_edit_id'];
       

            $query3 = mysqli_query($link,"SELECT gain_id FROM product_sale;");
            
                if ($row = mysqli_num_rows($query3)> 0) {
                    while ($res = mysqli_fetch_assoc($query3)) {
                        
                      if ($res['gain_id'] === $delEditId) {
                        
                        if ($link) {
                             mysqli_query($link,"UPDATE product_sale 
                            SET 
                            buyer_id= '".$buyer."',
                            class_id='".$class."',
                            `weight`= '".$weight."',
                            price= '".$price."'
                            WHERE gain_id= '".$delEditId."';
                            ");
                             mysqli_query($link,"UPDATE gain 
                            SET 
                            culture_id ='".$culture."'
                            WHERE id= '".$delEditId."' AND `user_id`='".$id."'  ;
                            ");
    
                              return '<div class="alert alert-success col-xl-12">
                                <strong>Success</strong> Data is submitted!
                                </div>
                                <script>setTimeout(()=>{
                                    document.querySelector(".alert").remove();
                                },2000)</script>';
                           
                            }
    
                        }
                    }
                    return'<div class="alert alert-danger col-xl-12">
                    <strong>Success</strong> Something went wrong!
                    </div>
                    <script>setTimeout(()=>{
                        document.querySelector(".alert").remove();
                    },2000)</script>';
                }else{
                    return'<div class="alert alert-danger col-xl-12">
                        <strong>Success</strong> Something went wrong!
                        </div>
                        <script>setTimeout(()=>{
                            document.querySelector(".alert").remove();
                        },2500)</script>';
                }
    
            
            
           
    }

    function deleteGain($link, $id){
        $delEditId =  $_POST['delete_edit_id'];
        $query3 = mysqli_query($link,"SELECT gain_id FROM product_sale;");
        
            if ($row = mysqli_num_rows($query3)> 0) {
                while ($res = mysqli_fetch_assoc($query3)) {
                   
                    if ($delEditId === $res['gain_id']) {

                             mysqli_query($link,"DELETE FROM product_sale
                            WHERE gain_id= '".$delEditId."';
                            ");
                             mysqli_query($link,"DELETE FROM gain
                            WHERE id = '".$delEditId."' AND id = '".$delEditId."' ;
                            ");

                            return '<div class="alert alert-success col-xl-12">
                                <strong>Success</strong> Data is submitted!
                                </div>
                                <script>setTimeout(()=>{
                                    document.querySelector(".alert").remove();
                                },2000)</script>';
                        
                        

                    }
                }
                return'<div class="alert alert-danger col-xl-12">
                <strong>Success</strong> Something went wrong!
                </div>
                <script>setTimeout(()=>{
                    document.querySelector(".alert").remove();
                },2500)</script>';

            }else{
                    return'<div class="alert alert-danger col-xl-12">
                        <strong>Success</strong> Something went wrong!
                        </div>
                        <script>setTimeout(()=>{
                            document.querySelector(".alert").remove();
                        },2500)</script>';
                }

                
    }

?>

