<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{ Html::style('public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
  <!-- Font Awesome -->
  {{ Html::style('public/assets/bower_components/font-awesome/css/font-awesome.min.css')}}
  <!-- Ionicons -->
  {{ Html::style('public/assets/bower_components/Ionicons/css/ionicons.min.css')}}
  <!-- Theme style -->
  {{ Html::style('public/assets/dist/css/AdminLTE.min.css')}}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{ Html::style('public/assets/dist/css/skins/_all-skins.min.css')}}
  
  
  <!-- Will Include CSS files when needed only -->
  @yield('extra-css')
  
  <!-- jQuery 3 -->
{{ Html::script('public/assets/bower_components/jquery/dist/jquery.min.js')}}

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">