@extends('layout')

@section('content')


<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

<div class="row">  
  	<div class="col-12">        
        <table class="table table-striped data-table">
        <thead>
        <tr>          
          <th>First Name</th>          
          <th>Family Name</th>          
          <th>Date of birth</th>	
          <th>Gender</th>          
          <th>Nationality</th> 
          <th>Email</th>
          <th>Phone No</th>
          <th>Disabilities</th>
          <th>Education history</th>
          <th>Qualifications</th>
          <th>Work experience</th>
          <th>Fees & References</th>
          <th>Additional information</th>
          <th>Applicant ID</th>
          <th>Created on</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($applicant as $applicants)   
            <tr>
                <td>{{$applicants->forename1}}</td>	
                <td>{{$applicants->familyname}}</td>	
                <td>{{$applicants->dateofbirth}}</td>	
				        <td>{{$applicants->gender}}</td>
                <td>{{$applicants->nationality}}</td>  
                <td>{{$applicants->email}}</td>
                <td>{{$applicants->telephonenumber}}</td>
                <td>{{$applicants->disabilities}}</td>
                <td>{{$applicants->educationhistory}}</td>
                <td>{{$applicants->qualifications}}</td>
                <td>{{$applicants->workexperience}}</td>
                <td>{{$applicants->feesandreferences}}</td>
                <td>{{$applicants->additionalinformation}}</td>                
                <td>{{$applicants->applicant_id}}</td>
                <td>{{$applicants->created_at}}</td>                          
                <td><a href="{{ route('applicants.show', $applicants->id)}}"><img src="<?php echo 'images/view.png'; ?>" style="font-size:24px;color:#007bff;margin:5px;" width="15"/></a></td>
                <td><a href="{{ route('applicants.edit', $applicants->id)}}"><img src="<?php echo 'images/edit.png'; ?>" style="font-size:24px;color:#007bff;margin:5px;" width="15"/></a></td>
                <td><form action="{{ route('applicants.destroy', $applicants->id)}}" method="post" style="display: inline-block">
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
        </div>
</div>

</div>
<div>


@endsection
