
<?php
$sql = "SELECT * FROM users WHERE email='".$_SESSION['em']."';";
$host = "localhost";
$server_username = "root";
$server_pass = "";
$base = "budget_app";
$id = [];
$fName = [];
$lName = [];
$email = [];
$password= [];
$uniqueId = uniqid();
$link = mysqli_connect($host, $server_username, $server_pass);
            
            if($link){
                if(mysqli_select_db($link,$base)){
                    $query = mysqli_query($link,$sql);
                    if(mysqli_num_rows($query) < 2){
                        $data;
                         while($row = mysqli_fetch_assoc($query)){
                            $id = $row['id'];
                            $fName = $row['first_name'];
                            $lName = $row['last_name'];
                            $email = $row['email'];
                            $password = $row['_password'];
                         }
                    }else{
                        '<div class="alert alert-danger">
                                <strong>Error message:</strong> No results!
                          </div>';
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

?>