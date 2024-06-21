@extends('layouts.user-app')
@section('content')
<style type="text/css">
    .up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}
.arrow {
    border: solid #ddd;
    border-width: 0 6px 6px 0;
    display: inline-block;
    padding: 3px;
    margin-left: 25px;
    margin-top: -9px;
}
</style>
<main>

        <!-- BreadCrumb start -->
       <!--  <section class="breadcrumb-area">
            <div class="breadcrumb-widget  pt-145 pb-125" style="background-image: url(http://localhost/finance/assets/img/banner/loan-banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content pt-170">
                                <h1>My Account</h1>
                                <ul>
                                    <li><a href="{{config('app.baseURL')}}">home</a></li>
                                    <li>My Account</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
        <!-- BreadCrumb end -->

        <!--     <section class="cta-area-2 pt-80 pb-80">-->
        <!--    <div class="container">-->
        <!--        <div class="row align-items-center">-->
        <!--            <div class="col-md-6">-->
        <!--                <div class="cta-content text-black wow fadeInRight">-->
        <!--                    <h2>Apply for home loan?</h2>-->
                            <!-- <p>Want to know more about our services </p> -->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 ">-->
        <!--                <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">-->
        <!--                    <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn wow fadeInLeft" target="_blank">Apply Now</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!-- Job posts start -->
        <section class="pb-130 bg_disable" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <!-- left side bar -->
                         @include('layouts.user-left')

                    <!-- Right bar -->
                    <div class="col-lg-9">
                        <div class="job-post-widget">

                            <div class="single-job-post me-1 wow fadeInUp mt-25">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Loan Information</a> </h6>
                                        
                                    </div>
                                    <!-- <div class="timestamp">
                                        Jan 30, 2021
                                    </div> -->
                                           @if($loandetail->status==1)    
                    <div class="col-md-8 mt-2">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="{{config('app.baseURL')}}/loan/getdocuments/{{$loandetail->loan_id}}" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;float:right;" target="_blank">Upload Documents</a>
                        </div>
                    </div>
                    @elseif($loandetail->status==-1)    
                     <div class="col-md-8 mt-2">
                        <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                            <a href="{{config('app.baseURL')}}/loan/personaldetail/{{$loandetail->loan_id}}" class="theme-btn wow fadeInLeft" class="wow fadeInUp theme-btn theme-btn-sm" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;margin-left:0px !important;font-size:16px !important;height: 40px;
    line-height: 40px;float:right;" target="_blank">Complete Form</a>
                        </div>
                    </div>
                    @endif
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Tenure (In Yr) :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_type}} </div>
                                    </div>
                    
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Loan Amount :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_amount}} </div>
                                    </div>
                    
                                </div>
                                <!--<div class="post-content">-->
                                <!--    <div class="d-flex flex-wrap">-->
                                <!--            <div class="job-location me-lg-3 me-2"><h6> Financing Type :</h6>-->
                                <!--            </div>-->
                                <!--            <div class="job-catagory">{{$loandetail->financing_type}} </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="post-content">-->
                                <!--    <div class="d-flex flex-wrap">-->
                                <!--            <div class="job-location me-lg-3 me-2"><h6> Bank Service:</h6>-->
                                <!--            </div>-->
                                <!--            <div class="job-catagory">{{$loandetail->bank_service}} </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                 @if($loandetail->firm_company_name!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Firm / Company Name :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->firm_company_name}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->nature_of_work!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Nature Of Work :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->nature_of_work}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->office_address!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Office Address :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->office_address}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->work_experience!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Work/Business Experience :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->work_experience}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->business_estabish_date!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Business Establish Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->business_estabish_date}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_one_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Year 1:</h6>
                                            </div>
                                        </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Net Salary:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_one_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_one_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Gross Salary:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_one_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_two_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 2:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_two_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_two_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_two_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_three_net_salary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Month 3:</h6>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_three_net_salary}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->month_three_grosssalary!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Gross Salary :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->month_three_grosssalary}} </div>
                                    </div>
                                </div>
                                @endif
                               <!-- For Business  -->
                                @if($loandetail->year_one_netprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 1 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_one_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_one_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Year 2 -->
                                @if($loandetail->year_two_netprofit!="")
                                <div class="post-content">

                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 2 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_two_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_two_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Year 3 -->
                                @if($loandetail->year_three_netprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Year 3 :</h6></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Net Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_netprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_depreciation!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6> Depreciation:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_depreciation}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_loaninterest!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Interest :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_loaninterest}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_grossprofit!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                        <div class="job-location me-lg-3 me-2"><h6>Gross Profit :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_grossprofit}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->year_three_sales!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Total Sales :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->year_three_sales}} </div>
                                    </div>
                                </div>
                                @endif
                                <!-- Existing Loan Information -->
                                @if($loandetail->exist_loan_type!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Type:</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_loan_type}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->exist_loan_amount!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Amoun :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_loan_amount}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->exist_tenor_of_loan!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Tenor :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_tenor_of_loan}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_emi!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_emi}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_sanction_dt!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan Sanction Date :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_sanction_dt}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->exist_emi_bounce!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Existing Loan EMI Bounce :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->exist_emi_bounce}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->cibil_problem!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Cibil Problem :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->cibil_problem}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->loan_requirement!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Loan Requirements :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->loan_requirement}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->job_business_profile="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Job/Business Profile :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->job_business_profile}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->purpose_of_loan!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Purpose Loan :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->purpose_of_loan}} </div>
                                    </div>
                                </div>
                                @endif
                                 @if($loandetail->extra_income!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Extra Income :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->extra_income}} </div>
                                    </div>
                                </div>
                                @endif
                                @if($loandetail->note!="")
                                <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                            <div class="job-location me-lg-3 me-2"><h6>Documents Pending :</h6>
                                            </div>
                                            <div class="job-catagory">{{$loandetail->note}} </div>
                                    </div>
                                </div>
                                @endif 
                            </div>
                            <!-- Uploaded Documents -->
                             @if($loandetail->loandoc!= '[]')
                             <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="post-header">
                                    <div>
                                        <h6 class="job-title"><a href="job-application.html">Uploaded Documents</a> </h6>
                                        
                                    </div>
                                </div>
                                <?php 
                                    $count=0;
                                ?>
                                @foreach($loandetail->loandoc as $loan_doc)
                                <?php 
                                    $count++;
                               
                                    $loan_dully=$loan_doc->where('name','dully_form')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                            
                             @if($count==1)
                             @if($loan_dully!="[]")
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2 col-lg-12"><h6>Duly filled Application Form with Photograph :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                           
                                            </div>
                                           <div class="col-lg-12 col-md-12">
                                            @foreach($loan_dully as $loans_dully)
                                           
                                        <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_dully->documents,13); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_dully->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_dully->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_dully->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       
                                        @endforeach
                                       </div>
                                    </div>
                                </div>
                                @endif
                                @endif

                                

                             @if($loandetail->profession_type!="salaried")
                                <?php 
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_identity!="[]")
                               <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                             <div class="col-lg-12 col-md-12">
                                             @foreach($loan_identity as $loans_identity)
                                       <!--  <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loans_identity->documents}}" id="pdf_display_frame" width="48%" height="400px"></iframe> -->
                                       <div class="row">
                                           <div class="col-md-9">
                                            <!--    <p>Name</p> -->
                                            <p><?php echo substr($loans_identity->documents,9); ?></p>
                                           </div>
                                            <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_identity->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_identity->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_identity->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div> 
                                @endif
                                @endif
                                @endif

                                <?php 
                                    $loan_edu=$loan_doc->where('name','education')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_edu!="[]")
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Educational Qualification Proof - Latest Degree (for professionals) :</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            @foreach($loan_edu as $loans_edu)
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_edu->documents,10); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_edu->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_edu->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_edu->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div> 
                                  @endif
                                @endif

                                @if($loandetail->profession_type!="salaried")
                                  <?php 
                                    $loan_business=$loan_doc->where('name','business_certificateproof')->where('loan_id',$loan_doc->loan_id)->get();
                                ?>
                                @if($count==1)
                                @if($loan_business!="[]")
                                 <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Certificate & Proof of business existence along with Business Profile :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                                            </div><br>
                                            <div class="col-lg-12 col-md-12">
                                            @foreach($loan_business as $loans_business)
                                       <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_business->documents,21); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_business->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_business->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_business->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                         
                                           
                                    
                                    
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div>
                                @endif
                                @endif

                                <?php 
                                    $loan_tax=$loan_doc->where('name','tax_return_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_tax!="[]")
                                 <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Last 3 years Income Tax returns with Profit & Loss Account & Balance Sheets duly certified/audited by a Chartered Accountant :</h6><br>
                                            </div>
                                             <div class="col-lg-12 col-md-12">                                            
                                            @foreach($loan_tax as $loans_tax)
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_tax->documents,11); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_tax->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_tax->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_tax->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>
                                        
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div>
                                @endif
                                @endif

                                @endif 

                                 <?php 
                                    $loan_bank=$loan_doc->where('name','bankstatement_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_bank!="[]")
                                <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2 col-lg-12"><h6>Last 12 months Bank Account Statements :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            @foreach($loan_bank as $loans_bank)
                                            <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_bank->documents,15); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_bank->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_bank->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_bank->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div> 
                                @endif
                                @endif

                                 <!-- <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Processing Fee Cheque in favour of '……………………………' :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->cheque}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div> -->

                                 <!-- <div class="post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Photocopy of Title Documents of the Property, Approved Plan etc. :</h6><br>
                                            </div>
                                        <iframe class="mr-2 mb-1 mt-1" src="{{config('app.baseURL')}}/storage/app/{{$loan_doc->property_document}}" id="pdf_display_frame" width="48%" height="400px"></iframe>
                                       
                                    </div>
                                </div> -->

                               @if($loandetail->profession_type=="salaried")

                                <?php 
                                    $loan_identity=$loan_doc->where('name','identity')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_identity!="[]")
                               <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Age Proof (PAN Card, Passport, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                             @foreach($loan_identity as $loans_identity)
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                                <p><?php echo substr($loans_identity->documents,9); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_identity->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_identity->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_identity->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div> 
                                @endif
                                @endif

                                <?php 
                                    $loan_residence=$loan_doc->where('name','residence')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_residence!="[]")
                                    <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Residence Proof (Passport, Driving License, Telephone Bill, Ration Card, Election Card, Any other Certificate from Statutory Authority) :</h6><br>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                            @foreach($loan_residence as $loans_residence)
                                        <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_residence->documents,15); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_residence->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_residence->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_residence->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                               
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div>
                                @endif
                                @endif
                                
                                 
                                <?php 
                                    $loan_salary=$loan_doc->where('name','income_proof')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_salary!="[]")
                                  <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Latest Salary-slips for last 3 months :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                            @foreach($loan_salary as $loans_salary)
                                         <div class="row">
                                           <div class="col-md-9">
                                               <!-- <p>Name</p> -->
                                               <p><?php echo substr($loans_salary->documents,12); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_salary->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_salary->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_salary->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                  
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div>
                                @endif
                                @endif

                                <?php 
                                    $loan_formsix=$loan_doc->where('name','form_sixteendoc')->where('loan_id',$loan_doc->loan_id)->get();
                                    // echo $loan_dully;die;
                                ?>
                                @if($count==1)
                                @if($loan_formsix!="[]")
                                  <div class="single-job-post post-content">
                                    <div class="d-flex flex-wrap">
                                         
                                          <div class="job-location me-lg-3 me-2"><h6>Form 16 for last 2 years :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6><br>
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                            @foreach($loan_formsix as $loans_formsix)
                                        <div class="row">
                                           <div class="col-md-9">
                                              <!--  <p>Name</p> -->
                                              <p><?php echo substr($loans_formsix->documents,13); ?></p>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_formsix->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/storage/app/{{$loans_formsix->documents}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                           </div>
                                           <div class="col-md-1 col-sm-1 col-2">
                                               <a href="{{config('app.baseURL')}}/delete_userdocument/{{$loans_formsix->loan_doc_id}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                           </div>                                   
                                </div><br>
                                       @endforeach
                                   </div>
                                    </div>
                                </div>
                                @endif 
                                @endif
                                @endif


                                
                                   @endforeach
                                
                            </div>

                            @endif


                            <!-- Display Comments -->
                            @if($loandetail->comments!='[]')
                            <div class="single-job-post me-1 wow fadeInUp mt-25" data-wow-delay="0.3s">
                                <div class="job-location me-lg-3 me-2"><h6>Comments </h6>
                                  <div class="row">

                           
                                    @php
                                      $chat_cnt=0;
                                      $name=[];
                                    @endphp
                                    @foreach($comment_name as $comment_names)
                                   
                                    
                                    @php 
                                    $names=$comment_names->commentname;
                                  array_push($name, $names);
                                  @endphp
                               
                                    @foreach($loandetail->comments as $cmt)
                                    @php
                                      $cmt=$cmt->whereIn('commentname', $name)->get();
                                  
                                    @endphp
                                  
                                    @endforeach
                                    <div class="single-job-post me-1 wow fadeInUp mt-25">
                                    <div class="row">
                                      <div class="col-md-12">
                                    <p>Message From {{$comment_names->username->name}}</p>
                                  </div>
                                  <span><i class="arrow up"></i></span>
                                  <div class="card" style="margin-left:15px;padding:10px;border:2px solid #ddd;width:95%;margin-top: -14px;">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <p>{{$comment_names->commentname}}</p> 
                                           
                                    </div>
                                    
                                    @foreach($cmt as $cmts)
                                    
                                   @if($comment_names->commentname == $cmts->commentname)
                                   @if($cmts->attachment!='')
                                   
                                    <div class="col-md-6">
                                        <p><?php echo substr($cmts->attachment,11); ?></p>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-2">
                                      <a href="{{config('app.baseURL')}}/storage/app/{{$cmts->attachment}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/download_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>&nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-2">
                                      <a href="{{config('app.baseURL')}}/storage/app/{{$cmts->attachment}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/view_loan.png" alt="img" style="width: 30px;height: 30px;" /></a>
                                    </div>
                                   <!--  <div class="col-md-1 col-sm-1 col-2">
                                      <a href="{{config('app.baseURL')}}/storage/app/{{$cmts->attachment}}"><img src="{{config('app.baseURL')}}/assets/img/apply-loan/delete_loan.png" alt="img" style="width: 27px;height: 28px;" /></a>
                                    </div> -->
                                  
                                    @endif
                                    @endif
                                      @endforeach 
                                      </div>
                                    </div>
                                  </div>
                                  </div>    
                                    @endforeach
                                    
                                    
                                    <!-- <div class="col-md-1 col-sm-1 col-2">
                                       
                                    </div> -->
                                    
                                  </div><br>
                                </div>

                            </div>
                            @endif
                            
                            <!-- Add Comments -->
                    <br>
                <div  class="form-section single-job-post">
                    <form action="{{config('app.baseURL')}}/sendmessage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="loan_id" value="{{$loandetail->loan_id}}">
                    <div class="col-md-12" style="margin-bottom:20px;">
                      <label>Comment</label>
                       <div class="form-group">
                         <input type="text" name="commentname" class="form-control" id="commentname" placeholder="comment" style="width: 100%;" required="">
                       </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <label>Attachment</label>
                            <div class="form-group">
                                <input multiple="" type="file" name="attachment[]" id="attachment">
                            </div>
                    </div>
                
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                    </form>
                </div>
                
              </div>
                            
                            
                            
                            

                     
                    </div>
                </div>
            </div>
        </div>
    </div>

        </section>
        <!-- Job posts end -->


    </main>

    @endsection