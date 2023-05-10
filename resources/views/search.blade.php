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
            
          <form action="{{ route('search') }}" method="GET" role="search">
              <div class="input-group">                             
                  <input type="text" class="form-control" name="search" placeholder="Search item" id="search">
                  <span class="input-group-btn">
                      <button class="btn btn-info" type="submit" title="Search item">
                          <span class="fas fa-search"></span>
                      </button>
                  </span>
              </div>
          </form>      
   
        <p> The Search results are :</p>
			   
	</div>
</div>

<div class="row">   
  	<div class="col-md-12">
      @if(isset($mubi))  
        <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th> 
            <th>Food Type</th>
            <th>Availability</th>
            <th>Quantity</th>
			      <th>Updated by</th> 
            <th>Updated</th>
            <th>Created by</th>
            <th>Created</th>
            <th>Image</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($mubi as $mubis)
            @php
            $imageURL = "images/{$mubis->image}";
            @endphp
            <?php
                if(empty($mubis->image)){
                $imageURL = "images/noimage.png";
                }
            ?>
            <tr>
                <td>{{$mubis->name}}</td>
                <td>{{$mubis->price}}</td>	
                <td>{{$mubis->category}}</td>  
                <td>{{$mubis->type}}</td>	
                <td>{{$mubis->availability}}</td>
                <td>{{$mubis->quantity}}</td>	
				        <td>{{$mubis->updatedby}}</td>
                <td>{{$mubis->updated_at}}</td>
				        <td>{{$mubis->createdby}}</td>  
                <td>{{$mubis->created_at}}</td>	               
				
                <td><img src="<?php echo $imageURL; ?>" class="img-responsive img-rounded pull-left" alt="" width="40"></td>
                <td><a href="{{ route('mubis.show', $mubis->id)}}"><img src="<?php echo 'images/view.png'; ?>" style="font-size:24px;color:#007bff;margin:5px;" width="15"/></a>
                    <a href="{{ route('mubis.edit', $mubis->id)}}"><img src="<?php echo 'images/edit.png'; ?>" style="font-size:24px;color:#007bff;margin:5px;" width="15"/></a>
                    <form action="{{ route('mubis.destroy', $mubis->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button style="background-color: Transparent;
                                            background-repeat:no-repeat;
                                            border: none;
                                            cursor:pointer;
                                            overflow: hidden;
                                            outline:none;">
                                            <img src="<?php echo 'images/delete.png'; ?>" style="font-size:24px;color:#007bff;margin:5px;" width="15"/>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach       
        </tbody>
        </table>
        <div class="d-flex justify-content-center">
        {{ $mubi->links() }}
</div>
        
        @else
            <p>No Details found. Try to search again !</p>
        @endif
    </div>
</div>
<div>


@endsection
