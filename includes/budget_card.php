
<?php
   
   

    
   
    $sql = "SELECT IFNULL(SUM(expenses.cost),0) AS cost
    FROM users
    INNER JOIN expenses
    ON users.id = expenses.user_id
    WHERE users.id = ".$id."";
   $query = mysqli_query($link,$sql);
   if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
           
            if ($row['cost'] !== '0.00') {
                $val = '-'.$row['cost'];
            }
            else{
                $val = $row['cost'];
            }
            
            echo'
            <div class="col-xl-6 col-sm-12 col-md-12 mx-md-auto col-xs-12 mx-xs-auto my-auto ml-3 ">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Budget</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">RSD '.$val.'</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>';
        }
   }else{
       echo'<div class="col-xl-6 col-sm-12 col-md-12 my-auto ml-3 ">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Budget</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">RSD 0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>';
   }
   ?>

