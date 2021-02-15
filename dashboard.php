<?php include 'uheader.php';?>
        <!--profile area  2nd column-->
        <div class="row text-center mx-6">
          <div class="col-sm-3">
            <div class="card_width card text-white bg-success  mb-3" style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Total Today Visitor</div>
              <div class="card-body">
              <h4 class="card-title"><?php echo $dboard->countVisitortoDay();?></h4>
                            </div>
            </div>

          </div>
          <div class="col-sm-3">
            <div class="card_width card text-white bg-primary mb-3"style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Total Yesterday Visitor</div>
              <div class="card-body">
              <h4 class="card-title"><?php echo $dboard->countVisitorlastDay();?></h4>
                            </div>
            </div>

          </div>

          <div class="col-sm-3">
            <div class="card_width card text-white bg-warning mb-3"style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Last 7 days Visitor</div>
               <div class="card-body">
                  <h4 class="card-title"><?php echo $dboard->countVisitorlast7Day();?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card_width card text-white bg-info mb-3"style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Total Visitor Till Day</div>
              <div class="card-body">
              <h4 class="card-title"><?php echo $dboard->countVisitortillDay();?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card_width card text-white bg-info mb-3"style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Total Departments</div>
              <div class="card-body">
              <h4 class="card-title"><?php echo $dboard->countDepartment();?></h4>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card_width card text-white bg-info mb-3"style="background-image: url(https://www.transparenttextures.com/patterns/batthern.png);">
              <div class="card-header">Total Employees</div>
              <div class="card-body">
              <h4 class="card-title"><?php echo $dboard->countEmployee();?></h4>
              </div>
            </div>
          </div>
        </div>
      <!--profile area 2nd column end-->

<?php include 'ufooter.php';?>
