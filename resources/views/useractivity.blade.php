@extends('layout')

@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
  .table td, .table th {
    padding: .25rem;    
  }
  .push-top .w-5{
    display:none;
  }
  .push-top .leading-5{
    padding-top:5px;
    font-size:12px;
  }
  .table thead tr th{
    vertical-align: top;
  }
</style>

<div class="container push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

<div class="row">  
  	<div class="col-md-12">        
        <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th> 
            <th>Status</th>
            <th>IP Address</th>            
        </tr>
        </thead>
        <tbody>
        @foreach($mubi as $mubis)
            
            <tr>
                <td>{{$mubis->user_name}}</td>
                <td>{{$mubis->user_email}}</td>	
                <td>{{$mubis->login_date}}</td>  
                <td>{{$mubis->status}}</td>	
                <td>{{$mubis->ipadress}}</td>
                
            </tr>
        @endforeach       
        </tbody>
        </table>
        <div class="d-flex justify-content-center">
        {{ $mubi->links() }}
</div>
        
       
    </div>
</div>
<div>


@endsection
