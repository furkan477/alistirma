<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Update</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php echo $__env->make('static.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Blog All</a></li>
                            <li class="breadcrumb-item active">Blog Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
             <form action="<?php echo e(route('updateBlog', ['id' => $data->id ])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label>Blog Name</label>
                        <input type="text" class="form-control" name="blog_name" value="<?php echo e($data->blog_name); ?>">
                    </div>
                    <div class="form-group">
                        <label>Blog Explanation</label>
                        <input type="text" class="form-control" name="blog_explanation" value="<?php echo e($data->blog_explanation); ?>"></input>
                    </div>
                    <div class="form-group">
                        <label>Blog Type</label>
                        <input type="text" class="form-control" name="blog_type" value="<?php echo e($data->blog_type); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Blog Update</button>
                </div>
             </form>
        </div>
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-inline">
            Patika.Dev - PhpBasics
        </div>
        We <strong><i class="fa fa-heart"></i></strong> PHP
    </footer>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\chatgpt\blogT\resources\views/update.blade.php ENDPATH**/ ?>