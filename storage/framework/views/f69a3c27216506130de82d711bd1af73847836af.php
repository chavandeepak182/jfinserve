
<?php $__env->startSection('content'); ?>

  <style type="text/css">
    .hidden{
      display: none;
    }
    .card-title{
      font-size: 15px !important;
    }
    .ginger-module-highlighter{
        background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255) !important;
    }
    


 td > span {
  width: 100px; 
  
}

 td.sn > span{
  width: 20px !important; 
  
}

 td.account > span{
  width: 180px !important; 
  
}


td > span {
  word-wrap: break-word;
  overflow-wrap: break-word;
}

    
    /* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 100%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }



header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.013em 0; }
header address { float: left; font-size: 100%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em;font-size: 15px; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 100%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
	padding-right: 11px;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media  print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page  { margin: 0; }
    .form-control:disabled, .form-control[readonly] {
      background-color: #a6e7efd6 !important;
      opacity: 1;
    }
    .form-group {
      margin-bottom: 0.8rem !important;
    }
    .move-right{
      padding-left: 15px;
      padding-right: 15px;
    }
    .btn-align{
        margin-left:20px;
    }
    #input_fields_wrap  .form-control{
        width: 95% !important;
        margin-left:15px !important;
    }
    
     #input_fields_wrap  label{
        
        margin-left:15px !important;
    }
    
    
   @media  print {
        
    .no-print{
        
        display:none;
    }
        
    }
    .label-input{
      padding: 0px !important;
    height: 19px;
    }
    .main-label{
      font-weight: 600;
      /*background: #1e90ff;*/
    /*padding: 3px;*/
    /*padding-right: 2px;*/
    /*color: #fff;*/
    }
    .main-label-itr{
       font-weight: 600;
    /*   background: #1e90ff;
        padding-right: 3px;*/
    /*padding: 3px;*/
    /*color: #fff;*/
    }
  
    .col-md-2{
      padding-right: 0px !important;
      padding-left: 0px !important;
    }

  </style>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
   


  <div class="content-wrapper" style="background:#fff !important;">

    <div class="content-header row no-print">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Invoice</h2>
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">

                <li class="breadcrumb-item">
                  <a href="#"> Home </a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Invoice</a>
                </li>
                <li class="breadcrumb-item">
                Add                                </li>
              </ol> 
            </div>
          </div>
        </div>
      </div>

    </div>              
    <form method="post" action="<?php echo e(config('app.baseURL')); ?>/admin/invoice/add">
    <div class="content-body" id="Many">
		<header>
			<h1></h1>
			<img src="https://jfinserv.com/images/logo/logo.png" alt="logo" style="    width: 182px;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
"><br><br>
			<p class="text-bold" style="margin-bottom:0px !important;font-size:15px;">To,	<br>						
The Branch Manager
</p>         
			<address contenteditable>
			    
				<!--<p class="biller_name_one">Housing Finance</p>-->
				<span class="bank_name" style="width:300px !important;margin-top:5px;max-width: 100% !important;margin-left: 0px !important;font-size:15px;">Bank Name:</span><p ></p>
				<span class="biller_name_one" style="width:300px !important;margin:0px !important;max-width: 100% !important;margin-left: 0px !important;font-size:15px;">Branch Name:</span><p></p>
			</address>
			
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
			
			<p contenteditable style="text-align:right;width:50%;margin-left: 50%;">Date : </p>
			<p contenteditable style="text-align:right;width:50%;margin-left: 50%;">Invoice no. : </p>
		</header>
		<article>
			<!--<h1>Recipient</h1>-->
			<p>Dear Sir/Madam,</p>
			<address contenteditable>
				<p>Reg:  Remuneration / Commission for the month of October 2021</p><br>
				
				<p style="font-weight:400 !important">I, DILIP KUMAR YADAV M/S JFINSERV CONSULTANT INDIA PVT LTD, an impaneled DSA for <b>Housing Loan in Bank of Maharashtra</b> with DSA code <b>D313450</b>.</p>
				<p style="font-weight:400 !important">I have scouted no. of the proposal in the month of October, 2022. The Branch wise detail of the loan scouted and sanctioned is as follows. Kindly credit the commission /payout against my DSA code to the below-mentioned account.</p>
			</address>
			
						<table class="new" style="margin-bottom:50px;">
				<thead>
					<tr>
						<th><span>Acc Name</span></th>
						<th><span>Acc Number</span></th>
						<th><span>IFSC Code</span></th>
						<th><span>Bank Name</span></th>
						<th><span>Branch Name</span></th>
						<th><span>GST No.</span></th>
						<th><span>PAN No.</span></th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span>JFINSERV CONSULTANT INDIA PVT LTD.</span></td>
						<td><span>7052141032</span></td>
						<td><span>IDIB000P087</span></td>
						<td><span>INDIAN BANK</span></td>
						<td><span>CAMP, PUNE</span></td>
						<td><span>27AAFCJ2379D1ZK</span></td>
						<td><span>AAFCJ2379D</span></td>
					</tr>
				</tbody>
			</table>
			<table class="meta" style="display:none;">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>101138</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>₹</span><span>0.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th style="width:50px !important;"><span contenteditable>SN</span></th>
						<th><span contenteditable>Customer Name</span></th>
						<th><span contenteditable>Bank & Branch Name</span></th>
						<th style="width:200px !important;"><span contenteditable>Account Number</span></th>
						<th><span contenteditable>Loan Amount (in INR)</span></th>
							<th><span contenteditable>Sanction Date</span></th>
							<th><span contenteditable>Disbursement Date</span></th>
							<th><span contenteditable>Payout Rate (in %)</span></th>
								
								<th><span contenteditable>Payout Amount (In INR)</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="sn" style="width:50px !important;"><a class="cut">-</a><span contenteditable>1</span></td>
						<td><span contenteditable></span></td>
						<td><span contenteditable></span></td>
						<td class="account" style="width:200px !important;"><span contenteditable></span></td>
						<td><span contenteditable>0</span></td>
						<td class="sdate"><span contenteditable></span></td>
						<td class="sdate"><span contenteditable></span></td>
						<td><span contenteditable>0.45</span></td>
						
							<td><span contenteditable></span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance" style="margin-bottom:30px;">
				<tr>
					<th><span contenteditable>Net Payout (in INR)</span></th>
					<td><span class="total_commission">0.00</span></td>
				</tr>
				
					<tr>
					<th><span contenteditable>GST (18%)</span></th>
					<td><span class="total_gst_amount">0</span></td>
				</tr>
				
					<tr>
					<th><span contenteditable>Total Payout (in INR)</span></th>
					<td><span class="total_commission_one">0.00</span></td>
				</tr>
				
						<tr style="display:none;">
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>₹</span><span>0.00</span></td>
				</tr>
				<tr style="display:none;">
					<th><span contenteditable>Amount Paid</span></th>
					<td><span contenteditable>0.00</span></td>
				</tr>
				<tr style="display:none;">
					<th><span contenteditable>Balance Due</span></th>
					<td><span>0.00</span></td>
				</tr>
			</table>
		</article>
			<address contenteditable>
			    
				<!--<p>Yours faithfully,</p>-->
				<!--<p>For ...........</p>-->
				<!--<p>Bank of Maharashtra</p>-->
		
			
		





		<aside>
			<h5 style="text-align:center;"><span contenteditable>Housing Finance Branch, Zonal Office Recommendation</span></h5>
			<br><div contenteditable>
				<p style="font-size:15px;">We confirm that above mentioned loanwas scouted by DSA- _____________________________________________ and it has been sanctioned and disbursed by Branch without any deviation in credit policy (other than delegation power of the Branch, If any).</p>
			</div>
		</aside><br>
		
		<address contenteditable>

	<p style="font-size:15px;">Yours faithfully,</p>


<p style="font-size:15px;">Branch Manager<br>Housing Finance Branch<br>Bank of Maharashtra</p>


	</address>
  </div>
  <br><br>
  
   <div class="row no-print">
                
                <div class="col-lg-6">
                  <div class="form-submit mt-10 mb-30" style="margin-top: 20px;">

                   <button type="button" id="target" class="btn btn-success">Save</button>
                    <a href="<?php echo e(config('app.baseURL')); ?>/admin/invoice"><button type="button" class="btn btn-danger">Cancel
   </button></a>
                 </div>
               </div>
               <div class="col-lg-2">
                </div>
                     <div class="col-lg-4">
  <div class="form-submit mt-10 mb-30 text-center" style="text-align:center;margin-top: 20px;">
      
   <button type="button" onclick="window.print();" class="btn btn-success waves-effect waves-light no-print">Print
   </button>
  
 </div>
</div>
               
               
               
             </div>
             </form>




<br>
</div>
<script>
    /* Shivving (IE8 is not supported, but at least it won't look as awful)
/* ========================================================================== */

    // var ctrlDown = false,
    //     ctrlKey = 17,
    //     cmdKey = 91,
    //     vKey = 86,
    //     cKey = 67;

    // $( "tbody" ).on("keydown", "tr td.sdate span", function( e ) {
    //     if (e.keyCode == vKey || e.keyCode == cKey){
    //         alert("ctrl use is prevented for date");
    //         return false;
    //     }
    // });
    
$( "#target" ).click(function() {
  var content=$(".content-body").html();
  var biller_name_one=$( ".biller_name_one" ).text();
  var biller_name_two=$( ".biller_name_one" ).text();
   var bank_name=$( ".bank_name" ).text();
   var amount=$( ".total_commission" ).text();


var bank_name = bank_name.replace("Bank Name:", "");
var biller_name_one = biller_name_one.replace("Branch Name:", "");

    $.ajax({
     type: "post",
     url : "https://jfinserv.com/admin/invoice/save",
    data : { "content" : content,"biller_name_one" : biller_name_one,"biller_name_two" : biller_name_two,"bank_name" : bank_name,"amount" : amount },
     success: function (result) {
       
       window.location.href = "https://jfinserv.com/admin/invoice";

     },
     error: function (xhr, textStatus, errorThrown) {
       alert(textStatus + ':' + errorThrown); 
     }
   });
  
  
  
});

(function (document) {
	var
	head = document.head = document.getElementsByTagName('head')[0] || document.documentElement,
	elements = 'article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output picture progress section summary time video x'.split(' '),
	elementsLength = elements.length,
	elementsIndex = 0,
	element;

	while (elementsIndex < elementsLength) {
		element = document.createElement(elements[++elementsIndex]);
	}

	element.innerHTML = 'x<style>' +
		'article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}' +
		'audio[controls],canvas,video{display:inline-block}' +
		'[hidden],audio{display:none}' +
		'mark{background:#FF0;color:#000}' +
	'</style>';

	return head.insertBefore(element.lastChild, head.firstChild);
})(document);

/* Prototyping
/* ========================================================================== */

(function (window, ElementPrototype, ArrayPrototype, polyfill) {
	function NodeList() { [polyfill] }
	NodeList.prototype.length = ArrayPrototype.length;

	ElementPrototype.matchesSelector = ElementPrototype.matchesSelector ||
	ElementPrototype.mozMatchesSelector ||
	ElementPrototype.msMatchesSelector ||
	ElementPrototype.oMatchesSelector ||
	ElementPrototype.webkitMatchesSelector ||
	function matchesSelector(selector) {
		return ArrayPrototype.indexOf.call(this.parentNode.querySelectorAll(selector), this) > -1;
	};

	ElementPrototype.ancestorQuerySelectorAll = ElementPrototype.ancestorQuerySelectorAll ||
	ElementPrototype.mozAncestorQuerySelectorAll ||
	ElementPrototype.msAncestorQuerySelectorAll ||
	ElementPrototype.oAncestorQuerySelectorAll ||
	ElementPrototype.webkitAncestorQuerySelectorAll ||
	function ancestorQuerySelectorAll(selector) {
		for (var cite = this, newNodeList = new NodeList; cite = cite.parentElement;) {
			if (cite.matchesSelector(selector)) ArrayPrototype.push.call(newNodeList, cite);
		}

		return newNodeList;
	};

	ElementPrototype.ancestorQuerySelector = ElementPrototype.ancestorQuerySelector ||
	ElementPrototype.mozAncestorQuerySelector ||
	ElementPrototype.msAncestorQuerySelector ||
	ElementPrototype.oAncestorQuerySelector ||
	ElementPrototype.webkitAncestorQuerySelector ||
	function ancestorQuerySelector(selector) {
		return this.ancestorQuerySelectorAll(selector)[0] || null;
	};
})(this, Element.prototype, Array.prototype);

/* Helper Functions
/* ========================================================================== */

function generateTableRow() {
	var emptyColumn = document.createElement('tr');

	emptyColumn.innerHTML = '<td class="sn" style="width:50px !important;"><a class="cut">-</a><span contenteditable></span></td>' +
		'<td><span contenteditable></span></td>' +
		'<td><span contenteditable></span></td>' +
		'<td class="account" style="width:200px !important;"><span contenteditable></span></td>' +
		'<td><span contenteditable></span></td>' +
		'<td class="sdate"><span contenteditable></span></td>' +
		'<td class="sdate"><span contenteditable></span></td>' +
		'<td><span contenteditable></span></td>' +
		'<td><span contenteditable></span></td>' ;

	return emptyColumn;
}

function parseFloatHTML(element) {
	return parseFloat(element.innerHTML.replace(/[^\d\.\-]+/g, '')) || 0;
}

function parsePrice(number) {
	return number.toFixed(2);
}

/* Update Number
/* ========================================================================== */

function updateNumber(e) {
	var
	activeElement = document.activeElement,
	value = parseFloat(activeElement.innerHTML),
	wasPrice = activeElement.innerHTML == parsePrice(parseFloatHTML(activeElement));

	if (!isNaN(value) && (e.keyCode == 38 || e.keyCode == 40 || e.wheelDeltaY)) {
		e.preventDefault();

		value += e.keyCode == 38 ? 1 : e.keyCode == 40 ? -1 : Math.round(e.wheelDelta * 0.025);
		value = Math.max(value, 0);

		activeElement.innerHTML = wasPrice ? parsePrice(value) : value;
	}
	
	if(e.keyCode == 17){
	    alert("ctrl use is prevented");
	   e.preventDefault();
	}
	    updateInvoice();
	
	
	

	
}

/* Update Invoice
/* ========================================================================== */

function updateInvoice() {
    	var net = 0;
    		var gst = 0;
	var total = 0;
	var cells, price, total, a, i;

	// update inventory cells
	// ======================

	for (var a = document.querySelectorAll('table.inventory tbody tr'), i = 0; a[i]; ++i) {
		// get inventory row cells
		cells = a[i].querySelectorAll('span:last-child');
		

		
		percentage_cell=parseFloatHTML(cells[7])/100;

		 actual_total_price=parseFloatHTML(cells[4]);
		calculation_one=parseFloat(percentage_cell)*parseFloat(actual_total_price);

		
		total_price=calculation_one;
		
		price = Math.round(total_price,2);
	

		// add price to total
		net += price;

		// set row total
		cells[8].innerHTML = price;
	}

	// update balance cells
	// ====================

	// get balance cells
	cells = document.querySelectorAll('table.balance td:last-child span:last-child');

	// set total
	cells[0].innerHTML = net;
	
		
		    
		    gst_cell=18/100;
		
		
		gst_amount=gst_cell*net;
		
		

	// set balance and meta balance
	cells[1].innerHTML = parsePrice(gst_amount);
	cells[2].innerHTML = parsePrice(net + gst_amount);
	

	// update prefix formatting
	// ========================

	var prefix = document.querySelector('#prefix').innerHTML;
	for (a = document.querySelectorAll('[data-prefix]'), i = 0; a[i]; ++i) a[i].innerHTML = prefix;

	// update price formatting
	// =======================

	for (a = document.querySelectorAll('span[data-prefix] + span'), i = 0; a[i]; ++i) if (document.activeElement != a[i]) a[i].innerHTML = parsePrice(parseFloatHTML(a[i]));
}

/* On Content Load
/* ========================================================================== */

function onContentLoad() {
	updateInvoice();

	var
	input = document.querySelector('input'),
	image = document.querySelector('img');

	function onClick(e) {
		var element = e.target.querySelector('[contenteditable]'), row;

		element && e.target != document.documentElement && e.target != document.body && element.focus();

		if (e.target.matchesSelector('.add')) {
			document.querySelector('table.inventory tbody').appendChild(generateTableRow());
		}
		else if (e.target.className == 'cut') {
			row = e.target.ancestorQuerySelector('tr');

			row.parentNode.removeChild(row);
		}

		updateInvoice();
	}

	function onEnterCancel(e) {
		e.preventDefault();

		image.classList.add('hover');
	}

	function onLeaveCancel(e) {
		e.preventDefault();

		image.classList.remove('hover');
	}

	function onFileInput(e) {
		image.classList.remove('hover');

		var
		reader = new FileReader(),
		files = e.dataTransfer ? e.dataTransfer.files : e.target.files,
		i = 0;

		reader.onload = onFileLoad;

		while (files[i]) reader.readAsDataURL(files[i++]);
	}

	function onFileLoad(e) {
		var data = e.target.result;

		image.src = data;
	}

	if (window.addEventListener) {
		document.addEventListener('click', onClick);

		document.addEventListener('mousewheel', updateNumber);
		document.addEventListener('keydown', updateNumber);

		document.addEventListener('keydown', updateInvoice);
		document.addEventListener('keyup', updateInvoice);

		input.addEventListener('focus', onEnterCancel);
		input.addEventListener('mouseover', onEnterCancel);
		input.addEventListener('dragover', onEnterCancel);
		input.addEventListener('dragenter', onEnterCancel);

		input.addEventListener('blur', onLeaveCancel);
		input.addEventListener('dragleave', onLeaveCancel);
		input.addEventListener('mouseout', onLeaveCancel);

		input.addEventListener('drop', onFileInput);
		input.addEventListener('change', onFileInput);
	}
}

window.addEventListener && document.addEventListener('DOMContentLoaded', onContentLoad);

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/admin/invoice_add.blade.php ENDPATH**/ ?>