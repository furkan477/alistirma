<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Task List Pages</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css ">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<?php echo $__env->make('static.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Task List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Task List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <table class="table table-bordered">    
                 <thead>
                    <tr>
                      <th style="width: 40px"><center>id</center></th>
                      <th><center>Task Name</center></th>
                      <th><center>Task Explanation</center></th>
                      <th><center>Task Type</center></th>
                      <th style="width: 40px"><center>Process</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><p><?php echo e($task->id); ?></p></td>
                      <td><p><?php echo e($task->task_name); ?></p></td>
                      <td><p><?php echo e($task->task_explanation); ?></p></td>
                      <td><p><?php echo e($task->task_type); ?></p></td>


                      <td>
                        <div class="btn-group btn-group-md">
                          <button class="btn btn-md btn-info">List</button>
                          <a href="<?php echo e(route('delete' , ['id' => $task->id])); ?>" class="btn btn-md btn-danger">Delete</a>
                          <a href="<?php echo e(route('update_' , ['id' => $task->id])); ?>" class="btn btn-md btn-warning">Update</a>
                        </div>
                      </td>
                    </tr>  
                  </tbody>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\chatgpt\todolist\resources\views/list.blade.php ENDPATH**/ ?>