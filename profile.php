<?php include'includes/nav_side.php' ?>
            
            <!-- Nav Item - Messages -->
            <?php include'includes/top_bar.php' ?>
            <!-- End of Topbar -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="p-3 h2 mb-4 ml-5 text-gray-800 col">Profile</h1>
           <hr>     
                    <div class="row col-md-12 mb-5 pb-5">
                        <form action="includes/reset_password.php" method="POST" class="card shadow p-3 mb-4 ml-5 col-6">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput">First Name</label>
                                    <input name="profName" type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="First" value="<?php echo $fName; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput">Last Name</label>
                                    <input name="profLastName" type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Last" value="<?php echo $lName; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput">E-mail</label>
                                    <input name="profEmail" type="text" class="form-control" id="formGroupExampleInput" placeholder="@" value="<?php echo $email; ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12 col-lg-6">
                                    <label for="formGroupExampleInput">Change password</label>
                                    <input name="profOldPass"type="text" class="form-control mb-4" id="formGroupExampleInput"
                                        placeholder="Old">
                                    <input name="profNewPass" type="text" class="form-control  " id="formGroupExampleInput"
                                        placeholder="New">
                                </div>
                            </div>


                            <div class="row">

                                <div class=" col-md-2 mt-auto">
                                    <input type="submit" value="Save" class="btn btn-primary btn-md col-md-12">
                                </div>
                            </div>

                        </form>
                        <div class="bg-gradient-primary col mb-4 card">
                        <div class="col-xl-8 col-lg-5 mx-auto mt-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Pepper class</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="chart-pie pt-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="myPieChart" width="447" height="316" class="chartjs-render-monitor" style="display: block; height: 253px; width: 358px;"></canvas>
                                </div>
                                <hr>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

<?php include'includes/footer.php'?>