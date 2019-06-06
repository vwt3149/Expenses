<?php include'includes/nav_side.php' ?>
            
            <!-- Nav Item - Messages -->
            <?php include'includes/top_bar.php' ?>
            <!-- End of Topbar -->
            <?php include'functions/functions.php'; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid"> 
                     <!-- Journal -->
                   
         
          <h1 class="h3 mb-4 text-gray-800 ml-5 pl-3">Journal </h1>
          <hr>
          <div class="row ">
                        <form action="upload.php" method="post" enctype="multipart/form-data" class="shadow col-md-5 card p-4 mx-auto" style="height: 300px" >
                        <div class="md-form h-5">
                                <label for="form7">Make Note</label>
                                <textarea name="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-xl-12 mt-3">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file "required>
                            </div>
                                
                               
                            </div>
                            <div class="row">
                                  <input type="submit" name="submit" class="btn btn-primary  col-xl-12 mx-auto ">
                            </div>
                          
                                                     
                        </form>

                        <form action="upload.1.php" method="post" enctype="multipart/form-data" class="shadow col-md-5 card p-4 mx-auto" style="height: 300px" >
                            <div class="md-form">
                                <label for="form7">Edit Note</label>
                                <textarea name="text"  id="form7" class="md-textarea form-control" rows="3"></textarea>
                            </div>
                            <div class="row">
                            <div class="row">
                                <div class="form-group col-xl-5  mt-3 ml-3">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" >
                            </div>
                                <div class="form-group col-lg-6">
                                        <input type="submit" name="btn_add" value="Add image" class="btn btn-primary  col-xl-8 mt-4 ml-5 ">
                                </div>
                               
                            </div>
                            <div class="row col-md-12">
                                <input name="journal_id"  class="form-control col-xl-7  m-auto" type="text"
                                    placeholder="Edit, Delete or Add by ID" required >
                                <input name="btn_del" type="submit" class="btn btn-primary col-xl-2 m-auto" value="Delete">
                                <input name="btn_edit" type="submit" class="btn btn-primary col-xl-2 m-auto" value="Edit">
                            </div>

                        </form>
                    </div>
          <div class="row p-2 mx-auto">
            <?php include'includes/jurnal_card.php'?>
          </div>
          <!-- End Journal -->
        </div>
      </div>
      <!-- End of Main Content -->
      <?php include'includes/footer.php'?>