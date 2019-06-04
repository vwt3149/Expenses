<?php include'includes/nav_side.php'; ?>

<!-- Nav Item - Messages -->
<?php include'includes/top_bar.php'; ?>
<!-- End of Topbar -->
<?php include'functions/functions.php'; ?>
<!-- Begin Page Content -->

<?php 
  if (isset($_POST['btn_sub'])) {
   $message =  addGain($link, $uniqueId, $id);
  }else if (isset($_POST['btn_edit'])) {
    $editMessage = editingGain($link, $id);
  }else if (isset($_POST['btn_del'])) {
    $delMessage = deleteGain($link,$id);
  }

?>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
  <h1 class="  p-3 h2 mb-2 ml-5 text-gray-800 col ">Gain </h1>
  </div>
  <hr>
 
  <div class="row">
  <div class="row col-xl-5 mx-auto">
   <h1 class="h4  text-gray-800 col ">Add </h1>
  </div>

  <div class="row col-xl-5 mx-auto">
   <h1 class="h4 text-gray-800 col ">Edit / Delete </h1>
  </div>
  </div>
 
  
  
  <div class="row ">
    <form action="gain.php" method="POST" class="card shadow p-3 col-md-5 col-sm-10 mb-5  ml-auto mr-auto">
      <div class="row ">
        
          <?php if (isset($message)) {
              echo $message;
          } ?>
        
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Culture</label>
          <select name="culture" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'culture');
          ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Class</label>
          <select name="class" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'class');
          ?>
          </select>
        </div>

      </div>
      <div class="row ">
        <div class="form-group col-md-4">
          <label for="exampleFormControlSelect1">Buyer</label>
          <select name="buyer" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'buyers');
          ?>
          </select>
        </div>
        <div class="col-md-4 ">
          <label>Weight</label>
          <input name="weight" class="form-control " type="number" placeholder="Kg" maxlength="10" required>
        </div>
        <div class="col-md-4 ">
          <label>Price</label>
          <input name="price" class="form-control " type="number" placeholder="$" maxlength="15" required>
        </div>
        <div class="col-md-12 mt-5">
          <input name="btn_sub" type="submit" value="Submit" class="btn btn-primary btn-md col-md-12">
        </div>
      </div>
    </form>

    <form action="gain.php" method="POST" class="card shadow p-3 col-md-5 col-sm-10 mb-5 ml-3  ml-auto mr-auto">
      <div class="row">
      <?php 
            if (isset($delMessage)) {
              echo $delMessage;
            } else if(isset($editMessage)){
              echo $editMessage;
            }
      ?>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Culture</label>
          <select name="culture" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'culture');
          ?>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect1">Class</label>
          <select name="class" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'class');
          ?>
          </select>
        </div>

      </div>
      <div class="row ">
        <div class="form-group col-md-4">
          <label for="exampleFormControlSelect1">Buyer</label>
          <select name="buyer" class="form-control" id="exampleFormControlSelect1">
          <?php 
           echo selectOptionsQuery($link,'buyers');
          ?>
          </select>
        </div>
        <div class="col-md-4 ">
          <label>Weight</label>
          <input name="weight" class="form-control " type="number" placeholder="Kg" maxlength="10" >
        </div>
        <div class="col-md-4 ">
          <label>Price</label>
          <input name="price" class="form-control " type="number" placeholder="$" maxlength="15" >
        </div>

      </div>
      <label class="mt-2">ID</label>
      <div class="row">
        <input name="delete_edit_id" class="form-control col-md-6 col-sm-11 mx-sm-auto ml-auto " type="text" placeholder="Edit or delete by ID">
        <input name="btn_del" type="submit" class="btn btn-primary col-md-2 col-sm-10 mx-sm-auto my-sm-3 mx-3" value="Delete">
        <input name="btn_edit" type="submit" class="btn btn-primary col-md-2 col-sm-10 mx-sm-auto my-sm-3 mx-3" value="Edit">
      </div>
    </form>

  </div>



  <!-- Card earnings -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Gain table</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <!-- <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                    aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> entries</label></div>
            </div> -->
            <div class="col-sm-12 col-md-6">
              <!-- <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                    class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-sm-12 p-4">
              <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">
                      ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending" style="width: 150px;">Culture</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending" style="width: 120px;">Weight</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Age: activate to sort column ascending" style="width: 180px;">Class</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Start date: activate to sort column ascending" style="width: 183px;">RSD/kg</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending" style="width: 168px;">Buyer</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending" style="width: 168px;">Date</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Culture</th>
                    <th rowspan="1" colspan="1">Weight</th>
                    <th rowspan="1" colspan="1">Class</th>
                    <th rowspan="1" colspan="1">RSD/kg</th>
                    <th rowspan="1" colspan="1">Buyer</th>
                    <th rowspan="1" colspan="1">Date</th>
                  </tr>
                  </tr>
                </tfoot>
                <tbody>
<?php
              // echo $_POST['dataTable_length'];
              // if (isset( $_POST['dataTable_length'])) {
              //  echo $length = $_POST['dataTable_length'];
                if($link){
                  if(mysqli_select_db($link,$base)){
                      $query = mysqli_query($link,
                      "SELECT 
                      gain.id,
                      gain.user_id,
                      culture.name AS culture,
                      product_sale.weight ,
                      product_sale.class_id,
                      buyers.name,
                      class.name AS cname,
                      product_sale.price,
                      DATE_FORMAT(product_sale.created_at ,'%M ' '%D ' '%Y ' )AS created_at
                      FROM product_sale
                      INNER JOIN gain
                      ON gain.id = product_sale.gain_id
                      INNER JOIN culture
                      ON gain.culture_id = culture.id
                      INNER JOIN buyers
                      ON buyers.id= product_sale.buyer_id
                      INNER JOIN class
                      ON class.id = product_sale.class_id
                      WHERE gain.user_id= '".$id."';
                      
                      ");
                      echo mysqli_error($link);
                      if($row = mysqli_num_rows($query)){
                           if ($row > 0) {
                            while($row = mysqli_fetch_assoc($query)){
                              echo '<tr role="row" class="odd">
                                      <td>'.$row['id'].'</td>
                                      <td>'.$row['culture'].'</td>
                                      <td>'.$row['weight'].'</td>
                                      <td>'.$row['cname'].'</td>
                                      <td>'.$row['price'].'</td>
                                      <td>'.$row['name'].'</td>
                                      <td>'.$row['created_at'].'</td>
                                    </tr>';
                             }
                           }
                          }
                  } 
               } 
?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#"
                      aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1"
                      tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2"
                      tabindex="1" class="page-link">2</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3"
                      tabindex="2" class="page-link">3</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4"
                      tabindex="0" class="page-link">4</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5"
                      tabindex="0" class="page-link">5</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6"
                      tabindex="0" class="page-link">6</a></li>
                  <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable"
                      data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include'includes/footer.php'?>