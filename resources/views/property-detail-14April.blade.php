@extends('layouts.app')
@section('content')
<style type="text/css">
  .home_adv_srch_opt .nav-pills {
    border-bottom: none;
    margin: 0 auto;
    text-align: center;
    width: 100% !important;
}
.why_chose_us .icon {
    background-color: #dde8f5 !important;
}
.home_adv_srch_opt .nav-pills li.nav-item a.nav-link{
  width: 125px !important;
}
    .navbar-expand-lg{
  background:#fff;
}
.header-menu.header-menu-2 .menu > .nav-item > .nav-link{
  color:#000;
}


.text-top{
    padding-top: 50px;
}
.spss ul li {
    border-radius: 8px;
    background-color: #0050b2 !important;
</style>
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/bootstrap.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{config('app.baseURL')}}/property/css/responsive.css">
<div class="single_page_listing_tab">
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="slider-tab" data-toggle="tab" href="#slider_tabs" role="tab" aria-controls="slider_tabs" aria-selected="true"><span class="flaticon-photo-camera color-white"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="map-tab" data-toggle="tab" href="#map_tabs" role="tab" aria-controls="map_tabs" aria-selected="false"><span class="flaticon-pin color-white"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="street-view-tab" data-toggle="tab" href="#street_view" role="tab" aria-controls="street_view" aria-selected="false"><span class="flaticon-street-view color-white"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div> -->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="slider_tabs" role="tabpanel" aria-labelledby="slider-tab">
          <!-- 10th Home Slider -->
        <div class="home10-mainslider">
          <div class="container-fluid p0">
            <div class="row">
              <div class="col-lg-12">
                <div class="main-banner-wrapper home10">
                    <div class="banner-style-one owl-theme owl-carousel">
                        <div class="slide slide-one" style="background-image: url(https://jfinserv.com/images/propertydetail.jpg);height: 790px;"></div>
                        <div class="slide slide-one" style="background-image: url(https://jfinserv.com/images/propertydetail.jpg);height: 790px;"></div>
                        <div class="slide slide-one" style="background-image: url(https://jfinserv.com/images/propertydetail.jpg);height: 790px;"></div>
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="map_tabs" role="tabpanel" aria-labelledby="map-tab">
          <div class="h600" id="map-canvas"></div>
        </div>
        <div class="tab-pane fade" id="street_view" role="tabpanel" aria-labelledby="street-view-tab">
          <iframe class="h600 w100" src="https://www.google.com/maps/embed?pb=!4v1553797194458!6m8!1m7!1sR4K_5Z2wRHTk9el8KLTh9Q!2m2!1d36.82551718071267!2d-76.34864590837246!3f305.15097!4f0!5f0.7820865974627469" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
  </div>

  <!-- Agent Single Grid View -->
  <section class="our-agent-single bgc-f7 pb30-991">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xl-8">
          <div class="single_property_title mt30-767 mb30-767">
            <h2>Luxury Family Home</h2>
            <p>1421 San Pedro St, Los Angeles, CA 90015</p>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="single_property_social_share">
            <div class="price float-left fn-400">
              <h2>$13,000<small>/mo</small></h2>
            </div>
            <div class="spss mt20 text-right tal-400">
              <ul class="mb0">
                <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                <li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
                <li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-8 mt50">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing_single_description">
                <div class="lsd_list">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#">Apartment</a></li>
                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                  </ul>
                </div>
                <h4 class="mb30">Description</h4>
                  <p class="mb25">Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.</p>
                  <p class="gpara second_para white_goverlay mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                      <p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
                      <p class="mt10 mb10">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
                    </div>
                </div>
                <p class="overlay_close">
                  <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     Show More <span class="flaticon-download-1 fz12"></span>
                    </a>
                </p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="additional_details">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Property Details</h4>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                      <li><p>Property ID :</p></li>
                      <li><p>Price :</p></li>
                      <li><p>Property Size :</p></li>
                      <li><p>Year Built :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>HZ27</span></p></li>
                      <li><p><span>$130,000</span></p></li>
                      <li><p><span>1560 Sq Ft</span></p></li>
                      <li><p><span>2016-01-09</span></p></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                      <li><p>Bedrooms :</p></li>
                      <li><p>Bathrooms :</p></li>
                      <li><p>Garage :</p></li>
                      <li><p>Garage Size :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>8</span></p></li>
                      <li><p><span>4</span></p></li>
                      <li><p><span>2</span></p></li>
                      <li><p><span>200 SqFt</span></p></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                      <li><p>Property Type :</p></li>
                      <li><p>Property Status :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>Apartment</span></p></li>
                      <li><p><span>For Sale</span></p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="additional_details">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Additional details</h4>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <ul class="list-inline-item">
                      <li><p>Deposit :</p></li>
                      <li><p>Pool Size :</p></li>
                      <li><p>Additional Rooms :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>20%</span></p></li>
                      <li><p><span>300 Sqft</span></p></li>
                      <li><p><span>Guest Bath</span></p></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <ul class="list-inline-item">
                      <li><p>Last remodel year :</p></li>
                      <li><p>Amenities :</p></li>
                      <li><p>Equipment :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                      <li><p><span>1987</span></p></li>
                      <li><p><span>Clubhouse</span></p></li>
                      <li><p><span>Grill - Gas</span></p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="property_attachment_area">
                <h4 class="mb30">Property Attachments</h4>
                <div class="iba_container style2">
                  <div class="icon_box_area style2">
                    <div class="score"><span class="flaticon-document text-thm fz30"></span></div>
                    <div class="details">
                      <h5><span class="flaticon-download text-thm pr10"></span> Demo Word Document</h5>
                    </div>
                  </div>
                  <div class="icon_box_area style2">
                    <div class="score"><span class="flaticon-pdf text-thm fz30"></span></div>
                    <div class="details">
                      <h5><span class="flaticon-download text-thm pr10"></span> Demo pdf Document</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="application_statics mt30">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb10">Features</h4>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Air Conditioning</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Barbeque</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Dryer</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Gym</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Laundry</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Lawn</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Microwave</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Outdoor Shower</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Refrigerator</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Sauna</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <ul class="order_list list-inline-item">
                      <li><a href="#"><span class="flaticon-tick"></span>Swimming Pool</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>TV Cable</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Washer</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>WiFi</a></li>
                      <li><a href="#"><span class="flaticon-tick"></span>Window Coverings</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="application_statics mt30">
                <h4 class="mb30">Location <small class="float-right">1421 San Pedro St, Los Angeles, CA 90015</small></h4>
                <div class="property_video p0">
                  <div class="thumb">
                    <div class="h400" id="map-canvas2"></div>
                    <div class="overlay_icon">
                      <a href="#"><img class="map_img_icon" src="images/header-logo.png" alt="header-logo.png"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="application_statics mt30">
                <h4 class="mb30">Floor plans</h4>
                <div class="faq_according style2">
                  <div class="accordion" id="accordionExample">
                      <div class="card floor_plan">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <ul class="mb0">
                                  <li class="list-inline-item">First Floor</li>
                                  <li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
                                  <li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
                                  <li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
                                  <li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
                                </ul>
                              </button>
                          </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                          <div class="card-body text-center">
                            <img class="img-fluid" src="images/resource/floor_plan.png" alt="floor_plan.png">
                              <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card floor_plan">
                        <div class="card-header active" id="headingTwo">
                          <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <ul class="mb0">
                                  <li class="list-inline-item">First Floor</li>
                                  <li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
                                  <li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
                                  <li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
                                  <li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
                                </ul>
                              </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body text-center">
                            <img class="img-fluid" src="images/resource/floor_plan.png" alt="floor_plan.png">
                              <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                           </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="shop_single_tab_content style2 mt30">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                  <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="property_video">
                      <div class="thumb">
                        <img class="pro_img img-fluid w100" src="images/background/7.jpg" alt="7.jpg">
                        <div class="overlay_icon">
                          <a class="video_popup_btn popup-img red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="walkscore_area mt30">
                <h4 class="mb30">Walkscore <span class="float-right"><img src="images/resource/wscore.png" alt="wscore.png"></span></h4>
                <div class="iba_container">
                  <div class="icon_box_area">
                    <div class="score"><span>70</span></div>
                    <div class="details">
                      <h5>Walk Score</h5>
                      <p>Somewhat Walkable</p>
                    </div>
                  </div>
                  <div class="icon_box_area">
                    <div class="score"><span>40</span></div>
                    <div class="details">
                      <h5>Bike Score</h5>
                      <p>Bikeable</p>
                    </div>
                  </div>
                </div>
                <a class="more_info" href="#">More Details Here</a>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="whats_nearby mt30">
                <h4 class="mb10">What's Nearby</h4>
                <div class="education_distance mb15">
                  <h5><span class="flaticon-college-graduation"></span> Education</h5>
                  <div class="single_line">
                    <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                    </ul>
                  </div>
                </div>
                <div class="education_distance mb15 style2">
                  <h5><span class="flaticon-heartbeat"></span> Health & Medical</h5>
                  <div class="single_line">
                    <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                    </ul>
                  </div>
                </div>
                <div class="education_distance style3">
                  <h5><span class="flaticon-front-of-bus"></span> Transportation</h5>
                  <div class="single_line">
                    <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                    </ul>
                  </div>
                  <div class="single_line">
                    <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                    <ul class="review">
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           <!--  <div class="col-lg-12">
              <div class="application_statics">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="chart_circle_doughnut mt30">
                      <h4>Payment Calculator</h4>
                      <canvas class="mt50 mb50" id="myChart"></canvas>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                      <select class="selectpicker" data-live-search="true" data-width="100%">
                        <option data-tokens="Terms">Terms</option>
                        <option data-tokens="Terms2">Terms2</option>
                        <option data-tokens="Terms3">Terms3</option>
                        <option data-tokens="Terms4">Terms4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleWebsite" placeholder="Interest">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleFaceBook" placeholder="Home Price">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleTwitter" placeholder="Down Payment">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-2">
                    <div class="my_profile_setting_input form-group">
                        <input type="text" class="form-control" id="formGroupExampleLinkedin" placeholder="10%">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="application_statics shop_single_tab_content style3 mt30">
                <ul class="nav nav-tabs float-right fn-414" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="hourly-tab" data-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                  <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <canvas id="myChartweave" width="100%" height="50"></canvas>
                  </div>
                  <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <div class="c_container w100"></div>
                  </div>
                  <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                    <h4 class="mt10-414">Property Views</h4>
                    <canvas class="ls_barchart" id="chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="product_single_content">
                <div class="mbp_pagination_comments mt30">
                  <ul class="total_reivew_view">
                    <li class="list-inline-item sub_titles">896 Reviews</li>
                    <li class="list-inline-item">
                      <ul class="star_list">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </li>
                    <li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
                    <li class="list-inline-item write_review">Write a Review</li>
                  </ul>
                  <div class="mbp_first media">
                    <img src="images/testimonial/1.png" class="mr-3" alt="1.png">
                    <div class="media-body">
                        <h4 class="sub_title mt-0">Diana Cooper
                        <div class="sspd_review dif">
                          <ul class="ml10">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"></li>
                          </ul>
                        </div>
                        </h4>
                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                        <p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                    </div>
                  </div>
                  <div class="custom_hr"></div>
                  <div class="mbp_first media">
                    <img src="images/testimonial/2.png" class="mr-3" alt="2.png">
                    <div class="media-body">
                        <h4 class="sub_title mt-0">Ali Tufan
                        <div class="sspd_review dif">
                          <ul class="ml10">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                            <li class="list-inline-item"></li>
                          </ul>
                        </div>
                        </h4>
                        <a class="sspd_postdate fz14" href="#">December 28, 2020</a>
                        <p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="product_single_content">
                <div class="mbp_pagination_comments mt30">
                  <div class="mbp_comment_form style2">
                    <h4>Write a Review</h4>
                    <ul class="sspd_review">
                      <li class="list-inline-item">
                        <ul class="mb0">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                      </li>
                      <li class="list-inline-item review_rating_para">Your Rating & Review</li>
                    </ul>
                    <form class="comments_form">
                      <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
                      </div>
                      <button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12">
              <h4 class="mt30 mb30">Similar Properties</h4>
            </div>
            <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item"><a href="#">Featured</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Sale</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feat_property">
                <div class="thumb">
                  <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                      <li class="list-inline-item"><a href="#">For Rent</a></li>
                      <li class="list-inline-item"><a href="#">Featured</a></li>
                    </ul>
                    <ul class="icon mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <p class="text-thm">Apartment</p>
                    <h4>Renovated Apartment</h4>
                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                      <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                      <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                      <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                      <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                    </ul>
                    <div class="fp_pdate float-right">4 years ago</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-4 mt50">
          <div class="sidebar_listing_list">
            <div class="sidebar_advanced_search_widget">
              <div class="sl_creator">
                <h4 class="mb25">Listed By</h4>
                <div class="media">
                  <img class="mr-3" src="images/team/lc1.png" alt="lc1.png">
                  <div class="media-body">
                      <h5 class="mt-0 mb0">Samul Williams</h5>
                      <p class="mb0">(123)456-7890</p>
                      <p class="mb0">info@findhouse.com</p>
                      <a class="text-thm" href="#">View My Listing</a>
                    </div>
                </div>
              </div>
              <ul class="sasw_list mb0">
                <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
                    </div>
                </li>
                <li class="search_area">
                    <div class="form-group">
                      <input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
                    </div>
                </li>
                <li class="search_area">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                    </div>
                </li>
                <li class="search_area">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="I'm interest in [ Listing Single ]"></textarea>
                                </div>
                </li>
                <li>
                  <div class="search_option_button">
                      <button type="submit" class="btn btn-block btn-thm">Search</button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="sidebar_listing_list">
            <div class="sidebar_advanced_search_widget">
              <ul class="sasw_list mb0">
                <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                      <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                    </div>
                </li>
                <li class="search_area">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                      <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                    </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Status</option>
                        <option>Apartment</option>
                        <option>Bungalow</option>
                        <option>Condo</option>
                        <option>House</option>
                        <option>Land</option>
                        <option>Single Family</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Property Type</option>
                        <option>Apartment</option>
                        <option>Bungalow</option>
                        <option>Condo</option>
                        <option>House</option>
                        <option>Land</option>
                        <option>Single Family</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="small_dropdown2">
                      <div id="prncgs2" class="btn dd_btn">
                        <span>Price</span>
                        <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                      </div>
                      <div class="dd_content2">
                        <div class="pricing_acontent">
                          <span id="slider-range-value1"></span>
                        <span class="mt0" id="slider-range-value2"></span>
                          <div id="slider"></div>
                        <!-- <input type="text" class="amount" placeholder="$52,239"> 
                        <input type="text" class="amount2" placeholder="$985,14">
                        <div class="slider-range"></div> -->
                        </div>
                      </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Bathrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Bedrooms</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Garages</option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_two">
                    <div class="candidate_revew_select">
                      <select class="selectpicker w100 show-tick">
                        <option>Year built</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                      </select>
                    </div>
                  </div>
                </li>
                <li class="min_area list-inline-item">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
                    </div>
                </li>
                <li class="max_area list-inline-item">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
                    </div>
                </li>
                <li>
                    <div id="accordion" class="panel-group">
                      <div class="panel">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                            </h4>
                          </div>
                        <div id="panelBodyRating" class="panel-collapse collapse">
                            <div class="panel-body row">
                              <div class="col-lg-12">
                                    <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck16">
                                  <label class="custom-control-label" for="customCheck16">Air Conditioning</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck17">
                                  <label class="custom-control-label" for="customCheck17">Barbeque</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck18">
                                  <label class="custom-control-label" for="customCheck18">Gym</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck19">
                                  <label class="custom-control-label" for="customCheck19">Microwave</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck20">
                                  <label class="custom-control-label" for="customCheck20">TV Cable</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck21">
                                  <label class="custom-control-label" for="customCheck21">Lawn</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck22">
                                  <label class="custom-control-label" for="customCheck22">Refrigerator</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck23">
                                  <label class="custom-control-label" for="customCheck23">Swimming Pool</label>
                                </div>
                                      </li>
                                    </ul>
                                    <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck24">
                                  <label class="custom-control-label" for="customCheck24">WiFi</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck25">
                                  <label class="custom-control-label" for="customCheck25">Sauna</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck26">
                                  <label class="custom-control-label" for="customCheck26">Dryer</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck27">
                                  <label class="custom-control-label" for="customCheck27">Washer</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck28">
                                  <label class="custom-control-label" for="customCheck28">Laundry</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck29">
                                  <label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
                                </div>
                                      </li>
                                      <li>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck30">
                                  <label class="custom-control-label" for="customCheck30">Window Coverings</label>
                                </div>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </li>
                <li>
                  <div class="search_option_button">
                      <button type="submit" class="btn btn-block btn-thm">Search</button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="terms_condition_widget">
            <h4 class="title">Featured Properties</h4>
            <div class="sidebar_feature_property_slider">
              <div class="item">
                <div class="feat_property home7 agent">
                  <div class="thumb">
                    <img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                      <h4 class="posr color-white">Renovated Apartment</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property home7 agent">
                  <div class="thumb">
                    <img class="img-whp" src="images/property/fp2.jpg" alt="fp2.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                      <h4 class="posr color-white">Renovated Apartment</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property home7 agent">
                  <div class="thumb">
                    <img class="img-whp" src="images/property/fp3.jpg" alt="fp3.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                      <h4 class="posr color-white">Renovated Apartment</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property home7 agent">
                  <div class="thumb">
                    <img class="img-whp" src="images/property/fp4.jpg" alt="fp4.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                      <h4 class="posr color-white">Renovated Apartment</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feat_property home7 agent">
                  <div class="thumb">
                    <img class="img-whp" src="images/property/fp5.jpg" alt="fp5.jpg">
                    <div class="thmb_cntnt">
                      <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                      </ul>
                      <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                      <h4 class="posr color-white">Renovated Apartment</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="terms_condition_widget">
            <h4 class="title">Categories Property</h4>
            <div class="widget_list">
              <ul class="list_details">
                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
              </ul>
            </div>
          </div>
          <div class="sidebar_feature_listing">
            <h4 class="title">Recently Viewed</h4>
            <div class="media">
              <img class="align-self-start mr-3" src="images/blog/fls1.jpg" alt="fls1.jpg">
              <div class="media-body">
                  <h5 class="mt-0 post_title">Nice Room With View</h5>
                  <a href="#">$13,000/<small>/mo</small></a>
                  <ul class="mb0">
                    <li class="list-inline-item">Beds: 4</li>
                    <li class="list-inline-item">Baths: 2</li>
                    <li class="list-inline-item">Sq Ft: 5280</li>
                  </ul>
              </div>
            </div>
            <div class="media">
              <img class="align-self-start mr-3" src="images/blog/fls2.jpg" alt="fls2.jpg">
              <div class="media-body">
                  <h5 class="mt-0 post_title">Villa called Archangel</h5>
                  <a href="#">$13,000<small>/mo</small></a>
                  <ul class="mb0">
                    <li class="list-inline-item">Beds: 4</li>
                    <li class="list-inline-item">Baths: 2</li>
                    <li class="list-inline-item">Sq Ft: 5280</li>
                  </ul>
              </div>
            </div>
            <div class="media">
              <img class="align-self-start mr-3" src="images/blog/fls3.jpg" alt="fls3.jpg">
              <div class="media-body">
                  <h5 class="mt-0 post_title">Sunset Studio</h5>
                  <a href="#">$13,000<small>/mo</small></a>
                  <ul class="mb0">
                    <li class="list-inline-item">Beds: 4</li>
                    <li class="list-inline-item">Baths: 2</li>
                    <li class="list-inline-item">Sq Ft: 5280</li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wrapper End -->
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/popper.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/isotop.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/simplebar.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/parallax.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/scrollto.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/wow.min.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/slider.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/pricing-slider.js"></script>
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{config('app.baseURL')}}/property/js/script.js"></script>

  @endsection