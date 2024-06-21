
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Approved Loans</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Approved Loans </a>
              </li>
              <li class="breadcrumb-item">
              All                                </li>
            </ol> 
          </div>
        </div>
      </div>
    </div>

  </div>                    
  <div class="content-body">
    <section id="basic-datatable">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">All Approved Loans</h4>
            </div>
            <div class="card-content">
              <div class="card-body card-dashboard">

                <div class="table-responsive">
                  <table id="footer-table" class="table zero-configuration">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Loan Amount</th>
                       <th>Loan Tenure</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tfoot>
                      <tr>
                       <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Loan Amount</th>
                       <th>Loan Tenure</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- datatable js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $(function(){
    $("#footer-table").DataTable({
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "stateSave": true,
      "paging": true,
      "ajax": "<?php echo e(config('app.baseURL')); ?>/admin/approvedallData",

      "columns":[{
        "mData":"full_name"
        
      },{
        "mData":"mobile",
        "mRender": function(data, type, row){

          return "<span><a href='tel:"+row.mobile+"'>"+row.mobile+"</a></span>";
          

        },
      },{
        "mData":"email",
        "mRender": function(data, type, row){

          return "<span><a href='mailto:"+row.email+"'>"+row.email+"</a></span>";
          

        },
      },{
        "mData":"loan_amount"
      },{  
        
        "mData": "loan_type"
        
      },{  
          "targets":-1,
          "mData": "Action",
          "bSortable": false,
          "ilter":false,
          "mRender": function(data, type, row){
            return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/loanDetails/" + row.loan_id+"><span><button type='submit' class='btn btn-primary mr-1'>Details</button></span></a>";
          },
        },
      ]
    });
  });


</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jfinserv.com/public_html/resources/views/admin/approvedloan.blade.php ENDPATH**/ ?>