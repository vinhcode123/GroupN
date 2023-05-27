
<?php $__env->startSection('content'); ?>

<!-- <table>
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Image</td>
        <td>Email</td>
        <td>Password</td>
        
    </tr>
    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
   
        <td>
           
            <?php echo e($ad->name); ?>

            
        </td>
        <td>
           
           <?php echo e($ad->phone); ?>

           
       </td>
       <td>
           
           <?php echo e($ad->image); ?>

           
       </td>
       <td>
           
           <?php echo e($ad->email); ?>

           
       </td>
       <td>
           
           <?php echo e($ad->password); ?>

           
       </td>

    </tr>
    $<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table> -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hướng dẫn thiết giao diện trang giỏ hàng bằng Bootstrap - hocwebgiare.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<style type="text/css">
.table>tbody>tr>td, .table>tfoot>tr>td {
	vertical-align: middle;
}
@media screen and (max-width: 600px) {
 table#cart tbody td .form-control {
 width:20%;
 display: inline !important;
}
 .actions .btn {
 width:36%;
 margin:1.5em 0;
}
 .actions .btn-info {
 float:left;
}
 .actions .btn-danger {
 float:right;
}
 table#cart thead {
display: none;
}
 table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
}
 table#cart tbody tr td:first-child {
background: #333;
color: #fff;
}
 table#cart tbody td:before {
 content: attr(data-th);
font-weight: bold;
 display: inline-block;
width: 8rem;
}
 table#cart tfoot td {
display:block;
}
 table#cart tfoot td .btn {
display:block;
}
}
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="text-center">Hướng dẫn thiết giao diện trang giỏ hàng bằng Bootstrap</h2>
<div class="container">
  <table id="cart" class="table table-hover table-condensed">
    <thead>
      <tr>
        <th style="width:30%">Hinh sản phẩm</th>
        <th style="width:15%">Tên sản phẩm</th>
        <th style="width:10%">Phone</th>
        <th style="width:8%">Email</th>
        <th style="width:22%" class="text-center">Password</th>
        
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td data-th="Product">
          <div class="row">
            <img src="" alt="">
            <div class="col-sm-2 hidden-xs"><img src="./imagess/<?php echo e($ad->image); ?>" alt="Sản phẩm 1" width="100" class="img-responsive"/></div>
           
          </div>
        </td>
        <td data-th="Subtotal" class="text-center"><?php echo e($ad->name); ?></td>
        <td data-th="Price"><?php echo e($ad-> phone); ?></td>
        <td data-th="Subtotal" class="text-center"><?php echo e($ad->email); ?></td>
        <td data-th="Subtotal" class="text-center"><?php echo e($ad->password); ?></td>
      </tr>
     
    </tbody>
    <tfoot>
    
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tfoot>
  </table>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\webdangnhap\resources\views/trangchu.blade.php ENDPATH**/ ?>