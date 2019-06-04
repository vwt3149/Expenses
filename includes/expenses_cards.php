<?php
   
   function numOfCat($x){
        
    switch ($x) {
        case 1:
            return "12";
            break;
        case 2:
            return '6';
            break;
        case 3:
            return '4';
            break;
        case 4:
            return '3';
            break;
        case 5:
            return '2';
            break;
        case 6:
            return '2';
            break;
        default:
           
            break;
    }
}
    
    $sql = "SELECT SUM(expenses.cost) AS cost, category_of_expenses.name AS category
    FROM users
    INNER JOIN expenses
    ON users.id = expenses.user_id
    INNER JOIN category_of_expenses
    ON category_of_expenses.id = expenses.category_id
    WHERE users.id = ".$id." 
    GROUP BY category ASC;
    ";
   $query = mysqli_query($link,$sql);
   if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
         echo $card = '
          <div class="col-xl-'.numOfCat(mysqli_num_rows($query) ).' col-md-3 col-sm-12 mb-sm-3 mx-auto">
            <div class="card border-left-primary shadow  h-auto ">
              <div class="card px-2 py-3">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$row['category'].'</div>
                    <div class=" mb-0 font-weight-bold  text-gray-800" style="font-size: 15px;">RSD '.$row['cost'].'</div>
                  </div>
                 <!-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div> -->
                </div>
              </div>
            </div>
          </div>';
        }
   }else{
     $sql = "SELECT * FROM category_of_expenses;";
    $query = mysqli_query($link,$sql);
        if(mysqli_num_rows($query) > 0){
          while($row = mysqli_fetch_assoc($query)){
           echo $card = '
          <div class="col-xl-2 col-md-2 mx-auto">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$row['name'].'</div>
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
        }
   }
   ?>

