@extends('layout')
@section('content')
<div class="container" width="75%">
<div class="row justify-content-center">                            
    <div class="card shadow-lg border-0 rounded-lg col-lg-7">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
        <div class="card-body">
            <form action="{{url('post-register')}}" method="POST" id="regForm">
            {{ csrf_field() }}
                <div class="form-group">
                    <label class="small mb-1" for="inpuApplicantCategory">Are you?</label>
                    <input  type="radio" name="ApplicantCategory" value="Home"> Home Applicant
                    <input  type="radio" name="ApplicantCategory" value="International"> International Applicant    
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Full Name</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Enter Full Name" />
                        @if ($errors->has('name'))
                        <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address" />
                    @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                    @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group mt-4 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <div class="small"><a href="{{url('login')}}">Have an account? Go to login</a></div>
        </div>
    </div>
</div>
</div>
@endsection
