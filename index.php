<?php include'includes/nav_side.php' ?>
            <!-- Nav Item - Messages -->
<?php include'includes/top_bar.php' ?>
            <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Home </h1>
          <!-- Card earnings -->
          
          <div class="row">
          <?php include'includes/expenses_cards.php' ?>
            
          </div> 
          
          <div class="row">
          <?php include'includes/budget_card.php' ?>
          <!-- <div class="col-xl-6 col-md-2 my-auto ml-3 ">
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
          </div> -->
            <div class="card-body col-xl-5 col-md-12 col-sm-12  mx-auto">
              <div class="chart-pie pt-4">
                  <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                          <div class=""></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                          <div class=""></div>
                      </div>
                  </div>
                  <canvas id="myPieChart" width="886" height="253"
                      class="chartjs-render-monitor"
                      style="display: block; width: 486px; height: 253px;"></canvas>
              </div>
          </div>
          </div>
          <hr>
          <!-- Journal -->
          <h1 class="h3 mb-4 text-gray-800">Journal </h1>
          <div class="row p-2">
            <?php include'includes/jurnal_card.php'?>
          </div>
          <!-- End Journal -->
        </div>
      </div>

      
      <!-- End of Main Content -->
      <?php include'includes/footer.php'?>