<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Update</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
@include('static.sidebar')
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Task Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Task All</a></li>
                            <li class="breadcrumb-item active">Task Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
             <form action="{{route('update',['id' => $tasks->id ])}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Task Name</label>
                        <input type="text" class="form-control" name="task_name" value="{{$tasks->task_name}}">
                    </div>
                    <div class="form-group">
                        <label>Task Explanation</label>
                        <input type="text" class="form-control" name="task_explanation" value="{{$tasks->task_explanation}}">
                    </div>
                    <div class="form-group">
                        <label>Task Type</label>
                        <input type="text" class="form-control" name="task_type" value="{{$tasks->task_type}}">
                    </div>
                    <div class="form-group">
                        <label>Task Start Date</label>
                        <input type="date" class="form-control" name="task_start_date" value="{{$tasks->task_start_date}}">
                    </div>
                    <div class="form-group">
                        <label>Task End Date</label>
                        <input type="date" class="form-control" name="task_end_date" value="{{$tasks->task_end_date}}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Task Update</button>
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
</html>