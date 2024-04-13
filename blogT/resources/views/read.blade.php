<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog List Pages</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/plugins/fontawesome-free/css/all.min.css ">
  <link rel="stylesheet" href="http://localhost/php-patikası/admin/public/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

@include('static.sidebar')

<div class="wrapper">
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Blog List</li>
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
                      <th><center>Blog Name</center></th>
                      <th><center>Blog Explanation</center></th>
                      <th><center>Blog Type</center></th>
                      <th style="width: 40px"><center>Process</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($data as $db)
                    <tr>
                      <td><p></p>{{$db->id}}</td>
                      <td><p></p>{{$db->blog_name}}</td>
                      <td><p></p>{{$db->blog_explanation}}</td>
                      <td><p></p>{{$db->blog_type}}</td>

                      <td>
                        <div class="btn-group btn-group-md">
                          <button class="btn btn-md btn-info">List</button>
                          <a href="{{route('delete', ['id' => $db->id ])}}" class="btn btn-md btn-danger">Delete</a>
                          <a href="{{route('update', ['id' => $db->id ])}}" class="btn btn-md btn-warning">Update</a>
                        </div>
                      </td>
                    </tr>  
                @endforeach                 
                  </tbody>
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
</html>