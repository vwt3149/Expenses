<?php
    function connectToDataBase($userQuery)
    {
        $host = "localhost";
        $server_username = "root";
        $server_pass = "";
        $base = "budget_app";
        $link = mysqli_connect($host, $server_username, $server_pass);
                    
                    if($link){
                        if(mysqli_select_db($link,$base)){
                            $query = mysqli_query($link,$userQuery);
                            if(mysqli_num_rows($query) > 0){
                                $data;
                                 while($row = mysqli_fetch_assoc($query)){
                                    $data .= $row[];
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
    }
    
?>