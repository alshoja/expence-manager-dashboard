<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
<!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-bag f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white">278</h2>
                            <p class="m-b-0">Todays Income</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-pink p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-comment f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white">278</h2>
                            <p class="m-b-0">Todays Expence</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-vector f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white">$27647</h2>
                            <p class="m-b-0">Purchase Amount</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-location-pin f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white">278</h2>
                            <p class="m-b-0">Total Purchase Due</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
              <div class="card">
                  <div class="card-title">
                      <h4>Todays Income</h4>
                  </div>
                  <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover ">
          <thead>
            <tr>
              <th>Item</th>
              <th>Individual</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Unknown</td>
              <td>2,456</td>
              <td>00:02:36</td>
            </tr>
            <tr>
              <td>Apple iPad</td>
              <td>1,006</td>
              <td>00:03:41</td>
            </tr>
            <tr>
              <td>Apple iPhone</td>
              <td>68</td>
              <td>00:04:10</td>
            </tr>
            <tr>
              <td>HTC Desire</td>
              <td>38</td>
              <td>00:01:40</td>
            </tr>
            <tr>
              <td>Samsung</td>
              <td>20</td>
              <td>00:04:54</td>
            </tr>
            <tr>
              <td>Apple iPad</td>
              <td>1,006</td>
              <td>00:03:41</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
              </div>
          </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Todays Expence</h4>
                    </div>
                    <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover ">
            <thead>
              <tr>
                <th>Item</th>
                <th>Individual</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Unknown</td>
                <td>2,456</td>
                <td>00:02:36</td>
              </tr>
              <tr>
                <td>Apple iPad</td>
                <td>1,006</td>
                <td>00:03:41</td>
              </tr>
              <tr>
                <td>Apple iPhone</td>
                <td>68</td>
                <td>00:04:10</td>
              </tr>
              <tr>
                <td>HTC Desire</td>
                <td>38</td>
                <td>00:01:40</td>
              </tr>
              <tr>
                <td>Samsung</td>
                <td>20</td>
                <td>00:04:54</td>
              </tr>
              <tr>
                <td>Apple iPad</td>
                <td>1,006</td>
                <td>00:03:41</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
                </div>
            </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>