@extends('layout')

@section('content')

<style>
    
  .form-group {
      margin-bottom: 0.2rem;
    }
    .form-group label{
      width:25%;
      vertical-align: top;
    }
    .form-control {
      display:inline-block;
      width: 70%;
    }
</style>

<div class="card push-top">
  <div class="card-header">
  {{ $applicant->forename1 }}'s' Information
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif    
    
    <b>Title:</b>{{ $applicant->title }}<br>    
    <b>Fore Name 1:</b>{{ $applicant->forename1 }}<br>
    <b>Fore Name2:</b>{{ $applicant->forename2 }}<br>    
    <b>Family Name:</b>{{ $applicant->familyname }}<br>
    <b>Previous Name:</b>{{ $applicant->previousname }}<br>    
    <b>Date of Birth:</b>{{ $applicant->dateofbirth }}<br>
    <b>Gender:</b>{{ $applicant->gender }}<br>    
    <b>Ethinic Origin:</b>{{ $applicant->ethinicorigin }}<br>
    <b>Nationality:</b>{{ $applicant->nationality }}<br>    
    <b>Country of Birth:</b>{{ $applicant->countryofbirth }}<br>
    <b>Country of Domicile:</b>{{ $applicant->countryofdomicile }}<br>    
    <b>Address line 1:</b>{{ $applicant->addressline1 }}<br>
    <b>Address line 2:</b>{{ $applicant->addressline2 }}<br>    
    <b>Address line 3:</b>{{ $applicant->addressline3 }}<br>
    <b>Town/City:</b>{{ $applicant->townorcity }}<br>    
    <b>District/Province:</b>{{ $applicant->districtorprovince }}<br>
    <b>Postcode:</b>{{ $applicant->postcode }}<br>    
    <b>Country:</b>{{ $applicant->country }}<br>
    <b>Email:</b>{{ $applicant->email }}<br>    
    <b>Telephone Number:</b>{{ $applicant->telephonenumber }}<br>
    <b>Study Level:</b>{{ $applicant->StudyLevel }}<br>    
    <b>Course Start Year:</b>{{ $applicant->CourseStartYear }}<br>
    <b>Course Start Month:</b>{{ $applicant->CourseStartMonth }}<br>    
    <b>Course:</b>{{ $applicant->Course }}<br>
    <b>Disabilities:</b>{{ $applicant->disabilities }}<br>    
    <b>Education History:</b>{{ $applicant->educationhistory }}<br>
    <b>Qualifications:</b>{{ $applicant->qualifications }}<br>    
    <b>Work Experience:</b>{{ $applicant->workexperience }}<br>
    <b>References:</b>{{ $applicant->feesandreferences }}<br>    
    <b>Additional Information:</b>{{ $applicant->additionalinformation }}<br>
    


  </div>
</div>
@endsection
