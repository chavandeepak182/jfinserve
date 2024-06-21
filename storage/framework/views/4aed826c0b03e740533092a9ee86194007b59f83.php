<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<div class="content-wrapper">

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Employee</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">

              <li class="breadcrumb-item">
                <a href="#"> Home </a>
              </li>
              <li class="breadcrumb-item">
                <a href="#"> Employee </a>
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
          <h4 class="card-title">All Employees</h4>
          <a href="<?php echo e(config('app.baseURL')); ?>/admin/admin/add"> <button type="submit" class="btn pull-right btn btn-primary panel-button">Add Employee</button></a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">

            <div class="table-responsive">
              <table id="footer-table" class="table zero-configuration">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                     <th>Contact Number</th>
                   
                    <th>Action</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                   <th>Name</th>
                    <th>Email</th>
                     <th>Contact Number</th>
                   
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

<script>
  $(function(){
    $("#footer-table").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [[ 1, "desc" ]],
      "ajax": "<?php echo e(config('app.baseURL')); ?>/admin/admin/allData",

      "columns":[{
          "mData":"name"
        },{
          "mData":"email",
          "mRender": function(data, type, row){
          if(row.email==null)
          {
            return "<span style='color:#28c76f;'>--</span>";
          }
          else{
            return row.email;
          }
        }
        },{
          "mData":"contact_number",
          "mRender": function(data, type, row){
          if(row.contact_number==null)
          {
            return "<span style='color:#28c76f;'>--</span>";
          }
          else{
            return row.contact_number;
          }
        }
        },{  
          "targets":-1,
          "mData": "Action",
          "bSortable": false,
          "ilter":false,
          "mRender": function(data, type, row){
            // if(row.is_active==0){
            //    return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/admin/" + row.id+"><span><button type='submit' class='btn btn-primary'>Details</button></span></a> ";
            //   return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/admin/" + row.id+"><span><button type='submit' class='btn btn-primary'>Details</button></span></a> <a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/admin/inactive/" + row.id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";
            // }else{
               // return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/admin/" + row.id+"><span><button type='submit' class='btn btn-primary'>Details</button></span></a> ";
            return "<a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/admin/" + row.id+"><span><button type='submit' class='btn btn-primary'>Details</button></span></a> <a class=datatable-left-link href=<?php echo e(config('app.baseURL')); ?>/admin/delete/" + row.id+"><span><button type='submit' class='btn btn-danger'>Delete</button></span></a>";
            // }
          },

        },
        ]
      });
  });


</script>
<!-- datatable js -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vshoppng/jfinserv_vshoppng_tech/resources/views/admin/admin/all.blade.php ENDPATH**/ ?>