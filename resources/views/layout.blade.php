<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Admission Service Portal</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <style>
   .wrap {
      display: flex;
      justify-content: space-between;
   }
   .logo {
      overflow: hidden;
      text-align: left;
      position: relative;
      height: 30px; 
   }
   body {
      font-family: Trebuchet MS, Tahoma, Arial, sans-serif;
      font-weight: normal;
      margin: 0px;
      padding: 0px;
      cursor: default;
   }
   div h2 {
      padding-top:5px;
      font-size: Medium;
      font-weight: bold;
      color: #000066;
      border-bottom-width: 1px;
      border-bottom-style: solid;
      border-bottom-color: #FF6600;
   }
   .push-top {
      margin-top: 20px;
   }   
   .push-top .w-5{
      display:none;
   }
   .push-top .leading-5{
      padding-top:5px;
      font-size:12px;
   }
   .table td, 
   .table th {
      padding: .25rem;    
   }
  .table thead tr th{
    vertical-align: top;
  }

   </style>
</head>
<body>
<div class='wrap sb-topnav navbar navbar-expand navbar-dark bg-dark'>
  <div class="logo">
      @if (Auth::guest()) 
         <a class="logo  navbar-brand" href="/login">Admission Service Portal</a>
      @else
         <a class="logo  navbar-brand" href="/dashboard">Admission Service Portal</a> 
      @endif      
  </div>
  <div>
      @if (Auth::guest())           
         <a class="navbar-brand" href="/login">Login</a>     
         <a class="navbar-brand" href="/register">Signup</a>
      @else
         <a class="navbar-brand" href="/list">Menu list</a>
         <a class="navbar-brand" href="/applicants/create">Add new applicant</a>
         <a class="navbar-brand" href="/logout">Logout</a>
      @endif    
  </div>
</div>
   <div class="container" width="90%">
      @yield('content')
   </div>
   <div>
   <footer class="full bg-light mt-auto" style="margin-top:15px;">	
      
</footer>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
</body>
</html>
