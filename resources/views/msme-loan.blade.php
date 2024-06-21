@extends('layouts.app')
@section('title', "MSME and Business loans in Pune | Business loan services in PCMC - Jfinserv")
@section('description', "Jfinserv offers MSME and Business loans in Pune with competitive rates, flexible repayment options, and a quick application process for Business loan services in PCMC and Pune.")
@section('keywords', "MSME loans in Pune, MSME Loans services in  pune, small business financing, SME loans, business growth funding, financial support for entrepreneurs")

@section('content')
<style type="text/css">
    .noUi-pips-horizontal {
        padding: 10px 0;
        height: 80px;
        top: -14px;
        left: 0;
        width: 100%;
    }

    body{
        overflow-x: hidden;
    }

    @media only screen and (min-width: 800px) and (max-width: 1700px){
        canvas#simple-pie-chart{
          height: 380px !important;
          width: 590px !important;
        }

    }

    .bg-white{
        background-color: #fff;
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0.1rem) !important;

        }

    #InterestRange {
        background: linear-gradient(to right, #0049a3 0%, #0049a3 42.108%, #fff 42.108%, white 100%);
    }

    #customRange{
        background:linear-gradient(to right, #0049a3 0%, #0049a3 14.2%, #fff 14.2%, white 100%)
    }
  
    #InterestRange{
        background:linear-gradient(to right, #0049a3 0%, #0049a3 42.108%, #fff 42.108%, white 100%)
    }

    .input-color {
        position: relative;
    }

    .input-color input {
        padding-left: 20px;
    }
    
    .input-color .color-box {
        width: 19px;
        height: 10px;
        display: inline-block;
        background-color: #fff;
        position: absolute;
        left: 0px;
        top: 5px;
    }

    .custom-range {
        height: calc(1rem + 0.2rem);
        background: linear-gradient(to right, #0049a3 0%, #0049a3 0%, #fff 0%, #fff 100%);
        border: solid 1px #0049a3;
        border-radius: 8px;
        outline: none;
        transition: background 450ms ease-in;
        -webkit-appearance: none;
    }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0.4rem);
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

  
    @media only screen and (min-width: 800px){
      .bar-chart-padding{
        padding: 6rem 0rem 2rem 0rem;
      }

    }

    @media only screen and (max-width: 767px){ 
        canvas#simple-pie-chart{
            height: 350px !important;
        }
    }

    .card-img-top{
        height: 200px !important;
        object-fit: cover;
        /*border-radius: 10px;*/
    }

    .card{
        border-radius: 10px;
    }

    .noUi-pips {
        position: relative;
        color: #999;
        display: flex;
    }

    .margin-top-j{
        margin-top: 200px;
    }

    .noUi-pips, .noUi-pips * {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .noUi-connects {
        border-radius: 3px;
    }

    .noUi-connects {
        overflow: hidden;
        z-index: 0;
    }

    .noUi-base, .noUi-connects {
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 1;
        margin-top: -2px;
        /*border:  1px solid #dbdbdb;*/
    }

    .noUi-target, .noUi-target * {
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-user-select: none;
        -ms-touch-action: none;
        touch-action: none;
        -ms-user-select: none;
        -moz-user-select: none;
        user-select: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .noUi-value-horizontal {
        -webkit-transform: translate(-50%,50%);
        transform: translate(-50%,50%);
    }
    
    .noUi-value {
        position: absolute;
        white-space: nowrap;
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
        font-family: Roboto,sans-serif;
        line-height: 22px;
    }
    
    .noUi-marker-horizontal.noUi-marker-large {
        height: 14px;
    }

    .noUi-marker-horizontal.noUi-marker {
        margin-left: 0px;
        width: 1px;
        height: 18px;
        margin-top: -9px;
    }

    .noUi-marker-large {
        background: #dcdee0;
    }

    .noUi-marker {
        position: absolute;
        background: #ccc;
    }

    .noUi-pips, .noUi-pips * {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    .noUi-touch-area {
        height: 100%;
        width: 100%;
    }
    
    .noUi-connect {
        background: #0050b2;
    }
    
    .noUi-connect {
        height: 100%;
        width: 100%;
    }
    
    .noUi-connect, .noUi-origin {
        will-change: transform;
        position: absolute;
        z-index: 1;
        top: 0;
        right: 0;
        -ms-transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
        -webkit-transform-style: preserve-3d;
        transform-origin: 0 0;
        transform-style: flat;
    }
    
    .noUi-target, .noUi-target * {
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-user-select: none;
        -ms-touch-action: none;
        touch-action: none;
        -ms-user-select: none;
        -moz-user-select: none;
        user-select: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    #test5{
        width: 581px;
        height: 2px;
    }
    
    #test6{
        width: 581px;
        height: 2px;
    }
    
    #test7{
        width: 581px;
        height: 2px;
    }
    
    .calculator-widget .single-calculator-widget .single-range .nav-tabs .nav-item .nav-link.active {
        color: #fff;
        background: #0d6efd;
    }
    
    .calculator-widget .single-calculator-widget .single-range .nav-tabs .nav-item {
        border: none;
        background: lightgrey;
    }
    
    .pt-20{
        padding-top: 50px !important;
    }

    .pt-40{
        margin-top:90px;
    }

.select-new{
        border: none !important;
        font-size: 16px !important;
    }

    .header-menu.header-menu-2 .menu > .nav-item > .nav-link {
         color: #000; 
    }
    
    .header-menu.header-menu-2 .menu > .nav-item > .nav-link {
        color: #000;
    }
    @media (min-width: 992px){
        .navbar-expand-lg {
            flex-wrap: nowrap;
            justify-content: flex-start;
            background-color: white;
        }
    }



/*@media (min-width: 992px){*/
/*.pb-lg-115 {*/
/*    padding-bottom: 90px;*/
/*}*/

/*.pt-200 {*/
/*    padding-top: 55px;*/
/*}*/
/*}*/

/*header*/
    @media screen and (min-width: 300px) and (max-width: 768px){
        .img-fluid, .icon_mail_alt{
          margin-top: 0px!important;
        }
        
        .icon_clock_alt{
          margin-top: 3px!important;
        }
        
        ul.bnr-description {
            display: block !important;
        }
        
        ul.bnr-description li:nth-child(2):after, ul.bnr-description li:nth-child(2):before {
            display: none;
        }
        
        .process-steps {
            background: url(https://jfinserv.com/assets/img/phone-steps.png) !important;
            width: 80% !important;
            height: 560px !important;
            background-size: cover!important;
        }
        
        .brdr-Block {
            padding: 5% !important;
        }
        
        .Block-quote {
            font-size: 3em !important;
            top: 6% !important;
            left: 0px !important;
        }
    }
    
    @media screen and (min-width: 801px) and (max-width: 2000px){
        .icon_clock_alt{
          margin-top: 3px!important;
        }
    }
    
    /*CSS for mobile view*/
    @media screen and (min-width: 300px) and (max-width: 400px){
        .d-lg-block{
            margin-top: 540px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
          }

        .section-title h1{
          font-size: 24px!important;
        } 
    }
   
    @media screen and (min-width: 401px) and (max-width: 500px){
        .d-lg-block{
          margin-top: 450px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
          }

        .section-title h1{
          font-size: 28px!important;
        } 
    }

    @media screen and (min-width: 501px) and (max-width: 700px){
        .d-lg-block{
            margin-top: 450px;
        }
            
        .header-menu .navbar {
            padding: 0 !important;
        }
            
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
            
        .row {
            --bs-gutter-x: hidden!important;
        }

        .section-title h1{
            font-size: 35px!important;
        } 
    }

    @media screen and (min-width: 701px) and (max-width: 768px){
        .d-lg-block{
            margin-top: 450px;
        }
        
        .header-menu .navbar {
            padding: 0 !important;
        }
        
        .border-end {
            border-right: 0px solid #dee2e6!important;
            border-bottom: 1px solid #dee2e6!important;
        }
        
        .row {
            --bs-gutter-x: hidden!important;
        }
        
        .g-5, .gx-5 {
            --bs-gutter-x: 0rem;
        }

        .section-title h1{
          font-size: 48px!important;
        } 
        
        .lead {
            font-size: 1.1rem;
            font-weight: 300;
        }
        
        .formemi{
              padding: 0.3rem!important;
        }
        
        #simple-pie-chart{
            display: block;
            height: 291px!important;
            width: 487px!important;
            margin-left: -58px!important;
        }
        
        .hover-box-shadow{
          margin-right: 1px;
        }
    }
    
    .bnr-description{
        font-size: 20px !important;
    }
    
    .faq-body ol, .faq-body ul {
        padding-left: 2rem;
    }
    
    .faq-body li {
        list-style: disc;
    }
    
    .Block-quote{
        font-size: 4em;
        color: rgba(51, 77, 114, 0.15);
        position: relative;
        top: 12%;
        left: -27px;
    }
    
    .brdr-Block {
        padding: 1.5% 2%;
        border: 2px solid #2f3188;
        box-shadow: 0 20px 45px rgba(51, 77, 114, 0.15);
        border-radius: 0px 0px 40px 40px;
        text-align: justify;
    }
    
    .feature-box {
        background-color: #fff;
        padding: 5% 10px;
        border-radius: 10px;
        box-shadow: 5px 8px 10px 5px rgba(51, 77, 114, 0.15);
        text-align: center;
        min-height: 140px;
    }
    
    .feature-box p i{
        color: #2F3188;
    }
    
    ul.bnr-description{
        display: inline-flex;
    }
    
    ul.bnr-description li:nth-child(2):after, ul.bnr-description li:nth-child(2):before{
        content: '|';
        margin: 0 20px;
    }
    
    .process-steps {
        background: url(https://jfinserv.com/assets/img/loan-steps-info.png);
        width: 100%;
        height: 225px;
        background-position: center;
        background-size: cover;
    }
</style>

<main>
    <!-- Banner start -->
    <section class="banner-area-2 loan-banner pt-20" style="background-image: url(http://jfinserv.com/assets/img/banner/loan-banner.png)">
        <div class="container">
            <div class="row pt-165 pb-100">
                <div class="col-lg-12 mx-auto">
                    <div class="banner-content text-center">
                        <div class="section-title">
                            <h1 class="wow fadeInUp" style="font-size: 40px;">MSME Loan Solutions </h1>
                            <ul class="display-8 text-top wow fadeInUp pt-3 bnr-description" style="color: #fff;">
                                <li><i class="fa-solid fa-percent"></i> Low Interest Rate</li>
                                <li><i class="fa-solid fa-laptop-file"></i> Online Application Process</li>
                                <li><i class="fa-regular fa-folder-open"></i> Minimum Documents Required</li>
                            </ul>
                        </div>
                        <!-- <a class="theme-btn theme-btn-lg theme-btn-alt mt-50 wow fadeInUp" data-wow-delay='0.2s' href="loan-details.html">
                            Get started <i class="arrow_right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->
    
    <section class="backbg pb-5" >
        <div class="container backbg">
            <div class="row justify-content-center">
                <div class="col-md-12 box-height mb-3">
                    <p class="Block-quote"><i class="fa-solid fa-quote-left"></i></p>
                    <p class="display-8 text-top wow fadeInUp bnr-description brdr-Block">Jfinserv understands the pivotal role that Micro, Small, and Medium Enterprises (MSMEs) play in driving economic growth and fostering innovation. That's why we're committed to support your entrepreneurial journey with financial solutions designed to fuel your success.<br/><br/>Our MSME Loan offerings are crafted to address the diverse needs of small and medium-sized businesses across various sectors. Whether you're looking to expand operations, invest in new equipment, boost working capital, or pursue any other growth opportunity, Jfinserv is here to help you every step of the way.</p>
                </div>
            </div>
            
            <div class="row box pt-3 mb-5">
                <div class="col-md-12">
                    <div class="faq-widget">
                        <div class="accordion" id="accordionExample">
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingOne">
                                        <h4 class="mb-0 heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span style="color: #d83733;">Eligibility Criteria</span> for a MSME Loan<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>To qualify for a Jfinserv MSME Loan, your business must meet the following eligibility criteria:</p>
                                            <ul>
                                                <li>Registered as a Micro, Small, or Medium Enterprise as per the Government of India's MSME classification.</li>
                                                <li>Positive business track record and financial stability.</li>
                                                <li>Satisfactory credit history and repayment capacity.</li>
                                                <li>Proprietorship | Partnerships | Limited Liability Partnership</li>
                                                <li>Private Limited Company | Limited Company</li>
                                                <li>An Enterprise should have at least five years of operations for the business.</li>
                                                <li>Minimum turnover of Rs. 40 lacs in the manufacturing and trading industries, and Rs.15 lacs in the service industry.</li>
                                                <li>Cash profit for the previous two years | Clear banking and loan payment history</li>
                                                <li>Positive business net worth | Demonstrated growth in turnover</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                <div class="w-100">
                                    <div class="faq-header" id="heading1">
                                        <h4 class="mb-0 heading-faq" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span style="color: #d83733;">Documents Required</span> for a MSME Loan<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <ul>
                                                <li>Business Plan | Proof of Identity | Proof of Address</li>
                                                <li>Business Registration Documents | Financial Statements</li>
                                                <li>Collateral Documents | MSME Registration Certificate</li>
                                                <li>Project Report | Credit History | Other Legal Documents</li>
                                                <li>Incorporation documents and Bank statements for the past 6 months.</li>
                                                <li>Validation proof and tax receipts for the current years turnover.</li>
                                                <li>Bank statements of the last 6 months.</li>
                                                <li>KYC documents | Relevant collateral documents</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row box mt-3">
                <h2 class="display-8 text-top text-center pt-4 pb-4">Key Features of <span style="color: #4da9ea;">Jfinserv</span> MSME Loans</h2>
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/service/fro.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">Flexible Financing Options:</h3>
                            <p style="font-size: 14px !important;">We offer a range of financing options tailored to suit the unique requirements of your business, ensuring flexibility and ease of repayment.<br/></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/service/cir.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">Competitive Interest Rates:</h3>
                            <p style="font-size: 14px !important;">Benefit from competitive interest rates that are designed to make your borrowing experience affordable and cost-effective.<br/></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/service/sap.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">Quick and Hassle-free Processing:</h3>
                            <p style="font-size: 14px !important;">With streamlined processes and minimal documentation requirements, we ensure a quick and hassle-free loan approval process, allowing you to focus on what matters most – growing your business.<br/></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/msme-loan.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">Personalized Support:</h3>
                            <p style="font-size: 14px !important;">Our team of experienced financial advisors is dedicated to providing personalized support and guidance at every stage of your loan journey, ensuring that you have the assistance you need to make informed decisions.<br/></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/service/tc.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">Transparent Terms &amp; Conditions: </h3>
                            <p style="font-size: 14px !important;">We believe in transparency and integrity. That's why we ensure that our terms and conditions are clear and easy to understand, so you know exactly what you're getting into.<br/></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 d-flex">
                    <div class="card hover-box-shadow">
                        <img class="card-img-top hover-fade-out img-img" src="{{config('app.baseURL')}}/images/service/zfc.jpg" alt="Edutech chatbot">
                        <div class="card-body">
                            <h3 style="font-size: 18px !important;font-weight: 700;">No Foreclosure Charges:</h3>
                            <p style="font-size: 14px !important;">Acquire a personal loan hassle-free, devoid of collateral requirements, streamlining the borrowing process while minimizing risks. Embrace worry-free pursuit of your dreams with no foreclosure charges.<br/></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="row no-gutters bg-white pb-80 pt-80" id="HomeLoanCalculator">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-6 mx-auto">
                    <div class="section-title">
                        <h2 class="wow fadeInUp">Loan Calculator</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">Receive an estimated total of your monthly installment payments, including a detailed breakdown of the MSME loan.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-xl-6 formemi">
                    <div class="min-vh-30 h-100 w-100">
                        <div class="map-marker">
                            <div class="info-window" data-max-width="400">
                               <div class="row calc">
                                    <div class="card card-body bg_disable text-left text-dark" style="padding: 1.50rem;">
                                        <form method="post" action="{{config('app.baseURL')}}/loans/loan-enquiry/3" enctype='multipart/form-data'>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <label for="LoanRange" class="finance-details">Loan Amount</label>
                                            <div class="row finance-details">
                                                <div class="col-lg-9 form-group">
                                                    <input type="range" class="custom-range" min="1000000" step="1000" value="1000000" max="500000000" id="LoanRange"><span class="labels">10 L</span><span class="labels" style="float: right;">50 Cr</span>
                                                </div>
                                                <div class="col-lg-3 form-group">
                                                    <input type="number" name="loan_amount" min="0" max="500000000" onkeypress="return validateFloatKeyPress(this,event);" class="loan-amount form-control range-slider-form">
                                                </div>
                                            </div>
                                            <label for="InterestRange" class="finance-details">Interest Rate (p.a)</label>
                                            <div class="row finance-details">
                                                <div class="col-lg-9 form-group">
                                                    <input type="range" class="custom-range" min="1" step="0.1" value="9" max="20" id="InterestRange"><span class="labels">1%</span><span class="labels" style="float: right;">20%</span>
                                                </div>
                                                <div class="col-lg-3 form-group">
                                                    <input type="text" name="interest_rate" onkeypress="return validateFloatKeyPress(this,event);" class="interest_rate form-control range-slider-form">
                                                </div>
                                            </div>
                                            <label for="customRange" class="finance-details">Loan Term</label>
                                            <div class="row finance-details">
                                                <div class="col-lg-9 form-group">
                                                    <input type="range" class="custom-range" min="1" step="1" value="5" max="30" id="customRange"><span class="labels">1 Year</span><span class="labels" style="float: right;">30 Year</span>
                                                </div>
                                                <div class="col-lg-3 form-group">
                                                    <input type="text" name="loan_term" class="investment form-control range-slider-form" readonly="">
                                                </div>
                                            </div>

                                            <div class="col-lg-12  finance-details">
                                                <p class="lead">Loan Amount <span class="value_loan_amount"><b>&#x20B9; 2.00 Cr</b></span></p>
                                                <p class="lead">Monthly EMI <span class="value_of_emi"><b>&#x20B9; 2.00 Cr</b></span></p>
                                                <input type="hidden" name="monthly_emi" class="monthly_emi" value="">
                                                <a href="{{config('app.baseURL')}}/apply-now" class="theme-btn theme-btn-lg mt-40" target="_blank">Apply Now <i class="arrow_right"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                <div class="col-lg-6 col-xl-6 emicalc">
                    <div class="card-content">
                        <div class="card-body pl-0">
                            <div class="height-600" id="graph-container">
                                <canvas id="simple-pie-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Loan start -->
    <section class="apply-loan-area bg_disable pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <div class="section-title">
                        <h2 class="wow fadeInUp">One Step Closer To Finding Your <span style="color: #d83733;">Perfect Loan!</span></h2>
                    </div>
                </div>
            </div>
            <div class="row pt-3 pb-5">
                <div class="col-md-12 mx-auto process-steps"></div>
            </div>
            
            <form action="{{config('app.baseURL')}}/apply-now">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row pt-35  gy-lg-0 gy-3">
                            <div class="col-lg-4">
                                <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="icon">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-1.1.png" alt="icon-1">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-1.2.png" alt="icon-1.2">
                                    </div>
                                    <div class="apply-content">
                                        <span class="title">How much do you need?</span>
                                        <p class="d-flex">₹ <input name="loan_amount" class="w-100" type="text" value="2000000"> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="icon">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-2.1.png" alt="icon-2">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-2.2.png" alt="icon-2.2">
                                    </div>
                                    <div class="apply-content">
                                        <span class="title">Type of Loan</span>
                                        <select name="select_loan_type" id="select-loan-type">
                                            <option>Select your Loan</option>
                                            <option id="Home_loan" value="Home Loan">Home Loan</option>
                                            <option id="Home_loan" value="Contract Loan" value="Contract Loan">Contract Loan</option>
                                            <option value="Project Loan">Project Loan</option>
                                            <option value="Working Capital">Working Capital</option>
                                            <option value="Overdraft Facility">Overdraft Facility</option>
                                            <option value="Machinary Loan">Machinary Loan</option>
                                            <option value="Business Loan">Business Loan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-3.1.png" alt="icon-3">
                                        <img src="{{config('app.baseURL')}}/assets/img/apply-loan/icon-3.2.png" alt="icon-3.2">
                                    </div>
                                    <div class="apply-content">
                                        <span class="title">Where do you currently live?</span>
                                        <div class="select_location d-flex align-items-center" id="locationSlectParent">
                                            <select class="w-100 select-new" name="select-location" id="locationSelect">
                                                <option value="" selected="">Select City</option>
                                            </select>
                                            <!--<span class="close" id="readOnlyClose">-->
                                            <!--    <i class="icon_close"></i>-->
                                            <!--</span>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-15 d-flex wow fadeInLeft">
                                <div class="icon">
                                    <img class="img=fluid" src="{{config('app.baseURL')}}/assets/img/steps/sheild.png" alt="sheild">
                                </div>
                                <p class="security-info d-inline-block ms-2">Your information is 100% secure. We do not share your info with other parties.</p>
                            </div>

                            <div class="col-12 text-center mt-35">
                                <button class="theme-btn theme-btn-lg wow fadeInUp" type="submit" formtarget="_blank">Apply now <i class="arrow_right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Apply Loan end -->
    
    <section class="faq-area pt-80 pb-80 bg-white">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-0 wow fadeInUp">Frequently Asked Questions (FAQs)</h2>
            </div>
            <div class="row align-items-end">
                <div class="col-md-9 mx-auto">
                    <div class="faq-widget">
                        <div class="accordion" id="accordionExample">
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.1s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingOne">
                                        <h4 class="mb-0 heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is an MSME loan?<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>An MSME loan is a financial product specifically designed to meet the funding requirements of Micro, Small, and Medium Enterprises (MSMEs). These loans are tailored to address the diverse needs of small and medium-sized businesses across various sectors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.3s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingTwo">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">What types of MSME loans does Jfinserv offer?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>Jfinserv offers a range of MSME loans, including working capital loans, term loans, machinery loans, business expansion loans, and loans for technology upgrades, among others, to support the growth and development of MSMEs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.5s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingThree">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">What are the eligibility criteria for availing an MSME loan from Jfinserv?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>The eligibility criteria for an MSME loan include factors such as the business's vintage, turnover, creditworthiness, repayment capacity, and compliance with regulatory requirements. Jfinserv aims to provide financial assistance to a wide range of MSMEs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.7s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingFour">
                                        <h4 class="mb-0 heading-faq collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">What documents are required to apply for an MSME loan with Jfinserv?<i class="material-icons">add</i><i class="material-icons">remove</i></h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>Common documents required for applying for an MSME loan may include business registration documents, financial statements (balance sheet, profit and loss statement), income tax returns, KYC documents of the business owners, and any other documents as per Jfinserv's requirements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingFive">
                                        <h4 class="mb-0 collapsed heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">What is the maximum loan amount and tenure offered for MSME loans by Jfinserv?<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>The maximum loan amount and tenure offered for MSME loans are depends on factors such as the business's financial performance, repayment capacity, and the specific loan product available. Jfinserv strives to offer competitive loan amounts and flexible repayment tenures.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingSix">
                                        <h4 class="mb-0 collapsed heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">What are the interest rates for MSME loans offered by Jfinserv?<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>Interest rates for MSME loans offered by Jfinserv are based on factors like market conditions, the loan amount, tenure, and the borrower's credit profile. Jfinserv aims to provide competitive interest rates to make MSME financing affordable for its clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget-one wow fadeInUp" data-wow-delay="0.9s">
                                <div class="w-100">
                                    <div class="faq-header" id="headingSeven">
                                        <h4 class="mb-0 collapsed heading-faq" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">What is the process for applying for an MSME loan with Jfinserv?<i class="material-icons">add</i><i class="material-icons">remove</i>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="faq-body">
                                            <p>The process for applying for an MSME loan with Jfinserv involves filling out an application form, submitting the required documents, undergoing credit appraisal, business evaluation, and loan approval. Our dedicated team of experts will guide you through the process to ensure a smooth experience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Call To Action start -->
    <section class="cta-area-2 pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="cta-content text-black wow fadeInRight">
                        <h2>Unlimited Earning Opportunity Through Referral</h2>
                        <!-- <p>Want to know more about our services </p> -->
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="cta-content mt-3 mt-sm-0 text-sm-end text-center">
                        <a href="https://jfinserv.com/referral-program" class="theme-btn wow fadeInLeft">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action end -->
    
    <section class="pt-80 pb-80 get-touch-area bg_white">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-0 wow fadeInUp pb-5">Let Us Help You!</h2>
            </div>
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact-form-widget">
                        <form action="{{config('app.baseURL')}}/thankyou" method="post">
                            {{csrf_field()}}
                            <div class="row fadeInUp">
                                <div class="col-md-4">
                                    <label for="f-name">Name</label>
                                    <input type="text" id="f-name" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-4 mt-20 mt-md-0">
                                    <label for="email-address">Email</label>
                                    <input type="email" id='email-address' name="email" class="form-control" placeholder="yourname@example.com" required="">
                                </div>
                                <div class="col-md-4 mt-20 mt-md-0">
                                    <label for="form-sub">Phone Number</label>
                                    <input type="tel" id="form-sub" name="phone" class="form-control" placeholder="Phone Number" required="">
                                </div>
                                <div class="col-md-6 mt-20">
                                    <label for="form-sub">Loan Type</label>
                                    <select name="loantype" id="select-loan-type" class="form-control">
                                        <option>Select your Loan</option>
                                        <option id="Home_loan" value="Home Loan">Term Loan</option>
                                        <option id="Contract Loan" value="Contract Loan">Working Capital</option>
                                        <option id="Project Loan" value="Project Loan">Other Purpose</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 mt-20">
                                <label for="form-sub">Select Loan Amount</label>
                                    <select name="loan-req" id="loan-req" class="form-control">
                                        <option value="" selected disabled hidden>Select Amount</option>
                                        <option id="upto-1cr" value="50L - 1Cr">50L - 1Cr</option>
                                        <option id="upto-50l" value="25L - 50L">More Than 1 Cr</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <label for="form-text">Messages</label>
                                    <textarea cols="30" rows="5" name="message" id="form-text" class="form-control pt-15" placeholder="Your Message....." ></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="policy-text"><i class="fa-solid fa-circle-info" style="color: #0050B2;"></i> By submitting this form you consent to us emailing you occasionally about our products and services. You can unsubscribe from emails at any time, and we will never pass your email onto third parties. Privacy Policy</p>
                                </div>
                                <div class="col-12 mt-35">
                                    <button type="submit" class="theme-btn theme-btn-lg w-100">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Get In Touch end -->
</main>


<script type="text/javascript">
    var allcity=["Delhi", "Pune", "Kolhapur", "Satara", "Pimpri", "Chinchwad", "Nashik", "Mumbai", "Thane", "Ahamednagar", "Sangamner","Chandrapur","Daulatabad","Dhule","Jalgaon","Kalyan","Karli","Mahabaleshwar","Malegaon","Matheran","Nagpur","Nanded","Nashik","Osmanabad","Pandharpur","Parbhani","Ratnagiri","Sangli","Sevagram","Solapur","Ulhasnagar","Vasai-Virar","Wardha","Yavatmal","Manipur"];
    $.each(allcity, function(i, p) {
        $('#locationSelect').append($('<option></option>').val(p).html(p));
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

   // For Slider control
    var slider = document.getElementById('test5');
    noUiSlider.create(slider, {
    start: [5000, 150000],
    connect: true,
   // step: 1,
    range: {
        'min': 5000,
        'max': 150000
    },
    format: wNumb({
        decimals: 0
    })
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
    var slider = document.getElementById('test6');
    noUiSlider.create(slider, {
    start: [12, 48],
    connect: true,
    step: 1,
    range: {
        'min': 12,
        'max': 48
    },
    format: wNumb({
        decimals: 0
    })
    });
})
</script>

<script type="text/javascript">
    $(document).ready(function() {
    var slider = document.getElementById('test7');
    noUiSlider.create(slider, {
    start: [2, 8],
    connect: true,
    step: 2,
    range: {
        'min': 2,
        'max': 8
    },
    format: wNumb({
        decimals: 0
    })
    });
})
</script>

<script type="text/javascript">
    function duration(){
        var duration=document.getElementById('monthTab').className;
        if(duration="nav-link month-tab active monthTab"){
            var dmonth=document.getElementById('month').value;
            document.getElementById('test6').value=dmonth;
        }
        if(duration="nav-link month-tab"){
            var dyear=document.getElementById('month').value;
            document.getElementById('test7').value=dyear;
        }
    }
</script>

<script type="text/javascript">
    function CalculateAmount(){
    var period=document.getElementById('month').value;
    var amount=document.getElementById('loan').value;
  
    if (period!="") {
        var LoanTime = period;
        switch (true) {
        case LoanTime >= 48:
          RateOfInterestTime = 2.4;
          break;
        case LoanTime >= 42:
          RateOfInterestTime = 2.55;
          break;
        case LoanTime >= 32:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 25:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 20:
          RateOfInterestTime = 3;
          break;
        case LoanTime >= 12:
          RateOfInterestTime = 3.15;
          break;
        case LoanTime >= 8:
          RateOfInterestTime = 2;
          break;
        case LoanTime >= 7:
          RateOfInterestTime = 2.2;
          break;
        case LoanTime >= 6:
          RateOfInterestTime = 2.3;
          break;
        case LoanTime >= 5:
          RateOfInterestTime = 2.5;
          break;
        case LoanTime >= 4:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 3:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 2:
          RateOfInterestTime = 3.1;
          break;
        default:
          RateOfInterestTime = 0;
      }
      }
    if (amount!="") {
      var LoanAmount = amount;
      switch (true) {
        case LoanAmount >= 13e4:
          RateOfInterestAmount = 2.9;
          break;
        case LoanAmount >= 115e3:
          RateOfInterestAmount = 3.1;
          break;
        case LoanAmount >= 1e5:
          RateOfInterestAmount = 3.3;
          break;
        case LoanAmount >= 8e4:
          RateOfInterestAmount = 3.5;
          break;
        case LoanAmount >= 65e3:
          RateOfInterestAmount = 3.7;
          break;
        case LoanAmount >= 5e4:
          RateOfInterestAmount = 3.8;
          break;
        case LoanAmount >= 25e3:
          RateOfInterestAmount = 3.95;
          break;
        case LoanAmount >= 1e4:
          RateOfInterestAmount = 4;
          break;
        default:
          RateOfInterestAmount = 4.09;
      }
    }  
      
    var TotalRateOfInterest = (RateOfInterestAmount + RateOfInterestTime);
    document.getElementById('InterestAmount').innerHTML=parseFloat(TotalRateOfInterest).toFixed(2)+" %";
    var TotalInterest = amount * (TotalRateOfInterest)/100;
    var tinterest=Math.round(TotalInterest);
    var totali=tinterest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var TI="₹ "+totali+ "*";
    document.getElementById('InterestPayable').innerHTML=TI;
    var InterestAndPrincipal = Number(TotalInterest) + Number(amount);
    var interest=Math.round(InterestAndPrincipal);
    var principal=interest.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var IP="₹ "+principal+"*";
    document.getElementById('TotalAmount').innerHTML=IP;
    var emiAmount=InterestAndPrincipal / period;
    var emi=Math.round(emiAmount);
    var EA="₹ "+emi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"*";
    document.getElementById('emiAmount').innerHTML=EA;

    var percent, graphRadius, circumference, strokeDashOffset;
    var GraphEl = $("#LoanGraph");
    percent = (100 * TotalInterest) / InterestAndPrincipal;
    graphRadius = GraphEl.find($("circle.complete")).attr("r");
    circumference = 2 * Math.PI * graphRadius;
    strokeDashOffset = circumference - (percent * circumference) / 100;
    GraphEl.find($("circle.complete"))
      .css({ "stroke-dashoffset": "0", opacity: "0.1" })
      .animate({ "stroke-dashoffset": strokeDashOffset, opacity: "1" }, 1250);
}
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#loans').addClass('active-header');
        $(".continue-button").click(function(){
        $('.finance-details').addClass('hidden');
        $('.user-details').removeClass('hidden');
        $('.header-details').removeClass('hidden');
        $('.terms-condition').removeClass('hidden');
        $('.recalculate-button').removeClass('hidden');
        $('.submit-button').removeClass('hidden');
        $('.continue-button').addClass('hidden');
      });

        $(".recalculate-button").click(function(){
        $('.finance-details').removeClass('hidden');
        $('.user-details').addClass('hidden');
        $('.header-details').addClass('hidden');
        $('.terms-condition').addClass('hidden');
        $('.recalculate-button').addClass('hidden');
        $('.submit-button').addClass('hidden');
        $('.continue-button').removeClass('hidden');
      });

        $(".investment").val($("#customRange").val());

        // Read value on change
        $("#customRange").on("mousemove touchmove", function(e){

          $(".investment").val($(this).val());
        });


        $(".loan-amount").val($("#LoanRange").val());

        // Read value on change
        $("#LoanRange").on("mousemove touchmove", function(e){

          var annual=$(this).val();

          // var number_annual=parseInt(annual).toLocaleString(); 


          $(".loan-amount").val(annual);
        });

        $(".loan-amount").keyup(function() {

          var annual=$(this).val();



          if (annual>500000000) {
            $.notify("Amount Should be less than 5 Cr");
            return false;
          }
          if (annual<1000000) {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }
          if (annual=="") {
            var annual=0;
            $.notify("Please Enter Loan Amount");
            return false;
          }
          if (annual==500000000) {
            var percentage= 100*(parseFloat(annual)-1000000)/(500000000-100000);
          }else{
           var percentage= 100*(parseFloat(annual)-1000000)/(500000000-100000)+0.5;
         }



         $("#LoanRange").css('background','linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#LoanRange").val(annual);

         /*Home Loan Calculation*/

         var interest_rate=$("#InterestRange").val();
         var loan_amount=$(this).val();
         var number_of_years= $("#customRange").val();


         var number_of_payments=parseFloat(number_of_years)*12;

         value_loan_amount=parseFloat(loan_amount);



         var interest = parseFloat(interest_rate) / 100 / 12;


         var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

         var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
         var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);
        
        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);



      });
      
      
      $(".interest_rate").keyup(function() {

          var interest_rate=$(this).val();



          if (interest_rate>20) {
            $.notify("Interest Rate Should be less than 20");
            return false;
          }
          if (interest_rate<1) {
            // $.notify("Amount Should be greater than 1 Lac");
            return false;
          }
          if (interest_rate=="") {
            var interest_rate=0;
            $.notify("Please Enter Interest Rate");
            return false;
          }
         
           if (interest_rate==20) {
            var percentage= 100*(parseFloat(interest_rate)-1)/(20-1);
          }else{
           var percentage= 100*(parseFloat(interest_rate)-1)/(20-1)+0.5;
         }


         $("#InterestRange").css('background','linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)')


         $("#InterestRange").val(interest_rate);

         /*Home Loan Calculation*/

         var loan_amount=$("#LoanRange").val();
         var interest_rate=$(this).val();
         
         var number_of_years= $("#customRange").val();


         var number_of_payments=parseFloat(number_of_years)*12;

         value_loan_amount=parseFloat(loan_amount);



         var interest = parseFloat(interest_rate) / 100 / 12;


         var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

         var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
         var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
         function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);
        
        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);



      });




        $(".interest_rate").val($("#InterestRange").val());

        // Read value on change
        $("#InterestRange").on("mousemove touchmove", function(e){

         var interest_rate=$(this).val();

         var number_interest_rate=parseInt(interest_rate).toLocaleString(); 

         $(".interest_rate").val(number_interest_rate);
       });

        /*Home Loan Calculation*/

        var interest_rate=$("#InterestRange").val();
        var loan_amount=$("#LoanRange").val();
        var number_of_years= $("#customRange").val();


        var number_of_payments=parseFloat(number_of_years)*12;

        value_loan_amount=parseFloat(loan_amount);



        var interest = parseFloat(interest_rate) / 100 / 12;


        var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

        var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
        var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
        function numDifferentiation(value) {
          var val = Math.abs(value)
          if (val >= 10000000) {
            val = (val / 10000000).toFixed(2) + ' Cr';
          } else if (val >= 100000) {
            val = (val / 100000).toFixed(2) + ' Lac';
          }else if (val >= 1000) {
            val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
          }
          return val;
        }
        new_value_of_emi=numDifferentiation(value_of_emi);

        new_total_payable_amount=numDifferentiation(total_payable_amount);

        new_total_interest_paid=numDifferentiation(total_interest_paid);

        new_value_loan_amount=numDifferentiation(value_loan_amount);

        $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

        $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
        $(".monthly_emi").val(new_value_of_emi);

        $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
        $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

        $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

        function newnumDifferentiation(value) {
          var val = Math.abs(value)

          val = (val).toFixed(2);

          return val;
        }

        var graph_value=[];

        var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
        var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


        graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

        /*End Calculation*/
        showchart(graph_value);


      });   



function myFunc(total, num) {
  return parseFloat(total) + parseFloat(num);
}

function showchart(graph_value){
 
  var value_range_new=graph_value;

  var total_sum=value_range_new.reduce(myFunc);

$('#simple-pie-chart').remove(); 
  $('#graph-container').append('<canvas id="simple-pie-chart"><canvas>');
  canvas = document.querySelector('#simple-pie-chart');

  var a = ["#a924fa", "#0050b2"],
  o = ($("#simple-pie-chart")),
  i = (new Chart(o, {
    type: "pie",
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      responsiveAnimationDuration: 500,
      title: {
        display: !0,
        text: "Breakup Of Total Payment"
      },
      plugins: {
        datalabels: {
          formatter: (value, o) => {

            let sum = total_sum;
            let percentage = (value * 100 / sum).toFixed(2) + "%";
            return percentage;


          },
          color: '#fff',
        },
      }
    },
    data: {
      labels: ["Principal Loan Amount", "Total Interest Payment"],
      datasets: [{
        label: "My First dataset",
        data: value_range_new,
        backgroundColor: a
      }]
    }
  }));

}



document.getElementById("customRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*SIP Calculation*/

  var interest_rate=$("#InterestRange").val();
  var loan_amount=$("#LoanRange").val();
  var number_of_years= this.value;

  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);




  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("LoanRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*Loan Calculation*/

  var interest_rate=$("#InterestRange").val();
  var loan_amount=this.value;
  var number_of_years= $("#customRange").val();


  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )'; + ' K';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);


  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

document.getElementById("InterestRange").oninput = function() {
  var newval=this.value;

  var minval=$(this).attr('min');
  var maxval=$(this).attr('max');

  /*Home Loan Calculation*/

  var interest_rate=this.value;
  var number_of_years= $("#customRange").val();
  var loan_amount=$("#LoanRange").val();

  var number_of_payments=parseFloat(number_of_years)*12;

  value_loan_amount=parseFloat(loan_amount);



  var interest = parseFloat(interest_rate) / 100 / 12;


  var value_of_emi=parseFloat(loan_amount)*parseFloat(interest)*(Math.pow(1+parseFloat(interest), parseFloat(number_of_payments)))/((Math.pow(1 + parseFloat(interest),parseFloat(number_of_payments)))-1);

  var total_payable_amount=parseFloat(value_of_emi)*parseFloat(number_of_payments);
  var total_interest_paid=parseFloat(total_payable_amount)-parseFloat(value_loan_amount)
  function numDifferentiation(value) {
    var val = Math.abs(value)
    if (val >= 10000000) {
      val = (val / 10000000).toFixed(2) + ' Cr';
    } else if (val >= 100000) {
      val = (val / 100000).toFixed(2) + ' Lac';
    }else if (val >= 1000) {
      val = (val / 1000).toFixed(2) + ' K &nbsp; ( k = 1000 )';
    }
    return val;
  }
  new_value_of_emi=numDifferentiation(value_of_emi);

  new_total_payable_amount=numDifferentiation(total_payable_amount);

  new_total_interest_paid=numDifferentiation(total_interest_paid);

  new_value_loan_amount=numDifferentiation(value_loan_amount);

  $(".value_loan_amount").html("<b>&#x20B9; " +new_value_loan_amount+"</b>");

  $(".value_of_emi").html("<b>&#x20B9; " +new_value_of_emi+"</b>");
  $(".monthly_emi").val(new_value_of_emi);

  $(".total_interest_paid").html("<b>&#x20B9; " +total_interest_paid.toFixed(2)+"</b>");
  $(".total_loan_amount").html("<b>&#x20B9; " +value_loan_amount+"</b>");

  $(".total_payable_amount").html("<b>&#x20B9; " +total_payable_amount.toFixed(2)+"</b>");

  function newnumDifferentiation(value) {
    var val = Math.abs(value)

    val = (val).toFixed(2);

    return val;
  }

  var graph_value=[];

  var graph_total_interest_paid=newnumDifferentiation(total_interest_paid);
  var graph_value_loan_amount=newnumDifferentiation(value_loan_amount);


  graph_value.push(graph_value_loan_amount,graph_total_interest_paid);

  /*End Calculation*/
  showchart(graph_value);


  var percentage= 100*(newval-minval)/(maxval-minval);

  this.style.background = 'linear-gradient(to right, #0049a3 0%, #0049a3 '+percentage +'%, #fff ' + percentage + '%, white 100%)'
};   

function validateFloatKeyPress(el, evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode;

  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }

  if (charCode == 46 && el.value.indexOf(".") !== -1) {
    return false;
  }

  if (charCode == 32){
    return false;
  }

  

  return true;
}

</script> 
<script src="{{config('app.baseURL')}}\assets\js\chart.min.js?id=b235b564de9c2c1d61d7"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
   
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/wNumb.js"></script>
    <script type="text/javascript" src="js/jquery-editable-select.js"></script>
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css">
@endsection