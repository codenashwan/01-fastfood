<?php include 'includes/nav.php'; include 'vendor/getProduct.php';?>

<div class="card border-0">
  <div class="card-body">
    <div class="tab-content" id="myTabContent">
    <?php getProduct($db,"active" ,1,3);?>


    <?php getProduct($db," ", 2,4);?>



    <?php getProduct($db," ",3,2);?>


    <?php getProduct($db," ",4,3);?>

    </div>
  </div>
</div>


<div class="mt-5">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row justify-content-center">


        <div class="col-xl-3 col-lg-4 mt-3">
          <div class="card card-stats mb-4 bg-gradient-lighter border-0 radius-20 shadow-sm mb-xl-0">
            <div class="card-body ">
              <div class="row">
                <div class="col text-center">
                  <img src="assets/img/allbank.svg" width="150">
                  <h5 class="card-title text-uppercase mb-0">کۆی هەموو پارەکان</h5>
                  <span class="h2 font-weight-bold mb-0 bank">0 IQD</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 mt-3">
          <div class="card card-stats mb-4 bg-gradient-lighter border-0 radius-20 shadow-sm mb-xl-0">
            <div class="card-body ">
              <div class="row">
                <div class="col text-center">
                  <img src="assets/img/clean.svg" id="clean" data-loc-subject="is_selected = 0"
                    class="card-img-top w-25">
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-xl-3 col-lg-4 mt-3">
          <div class="card card-stats mb-4 bg-gradient-lighter border-0 radius-20 shadow-sm mb-xl-0">
            <div class="card-body ">
              <div class="row">
                <div class="col text-center">
                  <img src="assets/img/bank.svg" width="105">
                  <h5 class="card-title text-uppercase mb-0">کۆی پارەکانی ئەمڕۆ</h5>
                  <span class="h2 font-weight-bold mb-0 banktoday">0 IQD </span><br>
                  <span class="btn btn-light radius-20 " id="cleantoday" data-loc-subject="is_now = 0">پاککردنەوە</span>

                </div>
              </div>
            </div>
          </div>
        </div>





      </div>
    </div>
  </div>
</div>






<?php include 'includes/footer.php';?>