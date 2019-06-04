<?php include'includes/nav_side.php'; ?>

<!-- Nav Item - Messages -->
<?php include'includes/top_bar.php'; ?>

<?php include"functions/functions.php"; ?>
<!-- End of Topbar -->
<?php
          if(isset($_POST['btn_add'])){
            $message = addingExpenses($link,$uniqueId, $id);
          }         

          else if(isset($_POST['btn_edit'])){
            editingExpenses($link, $id);
          }  

          else if(isset($_POST['btn_delete'])){
            deleteExpenses($link, $id);
          }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="p-3 h2 mb-4 ml-5 text-gray-800 col">Expenses </h1>
  <hr>
  <h1 class="p-3 h3 mb-4 ml-5 text-gray-800 col">Add expens </h1>
  <div class="row ">
    <form action="expenses.php" method="POST" class="card shadow p-3 col-md-10 col-sm-10 col-lg-5 mx-md-auto mb-5  ml-auto mr-auto">
      <div class="row ">
          <?php if (isset($message)) {
            echo $message;
          } ?>

        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Category</label>
          <select name="category" class="form-control" id="exampleFormControlSelect1">
            <?php
              echo selectOptionsQuery($link,'category_of_expenses');
            ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Culture</label>
          <select name="culture" class="form-control" id="exampleFormControlSelect1">
            <?php
                                  echo selectOptionsQuery($link,"culture");
                                ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="md-form col-md-6">
          <label for="form7">Description</label>
          <textarea name="text_add" id="form7" class="md-textarea form-control" rows="2" placeholder="Add description"
            required></textarea>
        </div>
        <div class="col-md-3 mt-auto ">
          <label>Price</label>
          <input type="number" name="price" class="form-control " id="validationCustom012" placeholder="$"
            maxlength="15" required>
        </div>
        <div class=" col-md-3 mt-auto">
          <input type="submit" name="btn_add" value="Submit" class="btn btn-primary btn-md mt-sm-4 col-md-12">
        </div>
      </div>
    </form>

    <form action="expenses.php" method="POST" class="card shadow p-3  col-md-10 col-sm-10 col-lg-5 mb-5 ml-3   ml-auto mr-auto">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Category</label>
          <select name="category1" class="form-control" id="exampleFormControlSelect1">
            <?php
                                    echo selectOptionsQuery($link,'category_of_expenses');
                                ?>

          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Culture</label>
          <select name="culture1" class="form-control" id="exampleFormControlSelect1">
            <?php
                                  echo selectOptionsQuery($link,'culture');
                              ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="md-form col-md-6">
          <label for="form7">Description</label>
          <textarea id="form7" name="text_add1" class="md-textarea form-control" rows="2" placeholder="Add description"
            require></textarea>
        </div>
        <div class="col-md-6 mt-auto ">
          <label>Price</label>
          <input class="form-control " name="price1" type="number" placeholder="$" require>
        </div>

      </div>
      <label class="mt-2">ID</label>
      <div class="row">
        <input class="form-control col-md-6 ml-auto " name="editId" type="text" placeholder="Edit or delete by ID"
          maxlength="30" required>
        <input type="submit" name="btn_delete" class="btn btn-primary col-md-2 col-sm-8 mx-sm-auto  mt-sm-4 mx-3" value="Delete">
        <input type="submit" name="btn_edit" class="btn btn-primary col-md-3 col-sm-8 mx-sm-auto mt-sm-4  mr-auto" value="Edit">
      </div>
    </form>

  </div>



  <!-- Card earnings -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Expenses table</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row col-lg-12 col-md-12 mx-auto">
            <div class="col-sm-12 col-md-6">
              <!-- <div class="dataTables_length" id="dataTable_length">
                <label>Show
                  <form action="expenses.php" method="POST">
                    <select name="dataTable_length" aria-controls="dataTable"
                      class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </form>
                  entries</label>
              </div> -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                    class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg">
              <table class="table table-bordered dataTable col-sm-12 col-md-12 col-lg-12" id="dataTable" width="100%" cellspacing="0" role="grid"
                aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">
                      ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending" style="width: 150px;">Category</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending" style="width: 120px;">Culture</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Age: activate to sort column ascending" style="width: 180px;">Description</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Start date: activate to sort column ascending" style="width: 183px;">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending" style="width: 168px;">Date</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Category</th>
                    <th rowspan="1" colspan="1">Culture</th>
                    <th rowspan="1" colspan="1">Description</th>
                    <th rowspan="1" colspan="1">Price</th>
                    <th rowspan="1" colspan="1">Date</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
              // echo $_POST['dataTable_length'];
              // if (isset( $_POST['dataTable_length'])) {
              //  echo $length = $_POST['dataTable_length'];
              if (isset($_POST['btn_search'])) {
                  $search_q = $_POST['search_q'];
                  if(mysqli_select_db($link,$base)){
                    $query = mysqli_query($link,
                    "SELECT 
                    expenses.id,
                    expenses.description,
                    expenses.user_id,
                    category_of_expenses.name AS category,
                    culture.name AS culture,
                    cost,
                    DATE_FORMAT(created_at ,'%M ' '%D ' '%Y ' ' %H:' '%i ' )AS created_at
                    FROM expenses
                    INNER JOIN category_of_expenses
                    ON expenses.category_id = category_of_expenses.id
                    INNER JOIN culture
                    ON expenses.culture_id = culture.id
                    WHERE expenses.description LIKE '%$search_q%';
                    
                    ");
                    if($row = mysqli_num_rows($query)){
                         if ($row) {
                          while($row = mysqli_fetch_assoc($query)){
                            echo '<tr role="row" class="odd">
                            <td>'.$row['id'].'</td>
                            <td>'.$row['category'].'</td>
                            <td>'.$row['culture'].'</td>
                            <td>'.$row['description'].'</td>
                            <td>'.$row['cost'].'</td>
                            <td>'.$row['created_at'].'</td>
                          </tr>';
                           }
                         }
                        }
                } 
            } 
              else{
                if($link){
                  if(mysqli_select_db($link,$base)){
                      $query = mysqli_query($link,
                      "SELECT 
                      expenses.id,
                      expenses.description,
                      expenses.user_id,
                      category_of_expenses.name AS category,
                      culture.name AS culture,
                      cost,
                      DATE_FORMAT(created_at ,'%M ' '%D ' '%Y ' ' %H:' '%i ' )AS created_at
                      FROM expenses
                      INNER JOIN category_of_expenses
                      ON expenses.category_id = category_of_expenses.id
                      INNER JOIN culture
                      ON expenses.culture_id = culture.id
                      WHERE expenses.user_id= '".$id."'
                      
                      ");
                      if($row = mysqli_num_rows($query)){
                           if ($row) {
                            while($row = mysqli_fetch_assoc($query)){
                              echo '<tr role="row" class="odd">
                              <td>'.$row['id'].'</td>
                              <td>'.$row['category'].'</td>
                              <td>'.$row['culture'].'</td>
                              <td>'.$row['description'].'</td>
                              <td>'.$row['cost'].'</td>
                              <td>'.$row['created_at'].'</td>
                            </tr>';
                             }
                           }
                          }
                  } 
              } 
              }
                
              // }
                
              ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                entries</div>
            </div> -->
            <div class="col-sm-12 col-md-7">
              <!-- <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#"
                      aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1"
                      tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2"
                      tabindex="0" class="page-link">2</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3"
                      tabindex="0" class="page-link">3</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4"
                      tabindex="0" class="page-link">4</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5"
                      tabindex="0" class="page-link">5</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6"
                      tabindex="0" class="page-link">6</a></li>
                  <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable"
                      data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- End of Main Content -->
<?php include'includes/footer.php'?>