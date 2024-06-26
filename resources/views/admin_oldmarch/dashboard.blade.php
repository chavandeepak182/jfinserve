  @extends('layouts.admin-app')
  @section('content')
  <!-- BEGIN: Content-->
  


    <div class="content-wrapper">


        <div class="content-body">


            <section id="dashboard-analytics">
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                      <div class="card bg-analytics text-white">
                        <div class="card-content">
                          <div class="card-body text-center">
                            <img src="{{config('app.baseURL')}}/images\elements\decore-left.png" class="img-left" alt="card-img-left">
                            <img src="{{config('app.baseURL')}}/images\elements\decore-right.png" class="img-right" alt="card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                              <h1 class="mb-2 text-white">Welcome Admin,</h1>
                              <p class="m-auto w-75">Manage <strong>Leads, Refer & Earn and Blogs</strong></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-primary p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-users text-primary font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25">{{$lead_count}}</h2>
                  <p class="mb-0">Total Leads</p>
              </div>
             <!--  <div class="card-content">
                  <div id="subscribe-gain-chart"></div>
              </div> -->
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-warning p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-package text-warning font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25">{{$refer_earn_count}}</h2>
                <p class="mb-0">Total Refer & Earn</p>
            </div>
          <!--   <div class="card-content">
                <div id="orders-received-chart"></div>
            </div> -->
        </div>
    </div>
</div>
</section>
<!-- Dashboard Analytics end -->
</div>
</div>

<!-- End: Content-->



@endsection