
@extends ('layouts.master')
@section('title')
QPG - Login or Signup
@endsection
@section('content')
@if(count($errors)>0)
        <div class="row"></div>
            <div class="col-md-16"></div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
@endif 
<div class="container">
<div class="row">
    <div class="col-md-6">
    <h3> Sign up</h3>
        <form action="{{route('signupControl')}}" method="post">
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
            <label for="email">Your email </label>
            <input class = "form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
            </div>
            <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
            <label for="first_name">Your First Name</label>
            <input class = "form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
            </div>
            <div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">
            <label for="last_name">Your Last Name</label>
            <input class = "form-control" type="text" name="last_name" id="last_name" value="{{Request::old('last_name')}}">
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            <label for="Password">Chose a Password </label>
            <input class = "form-control" type="Password" name="password" id="password">
            </div>

            <div class="form-group">
            <label for="Password">Re-enter Password </label>
            <input class = "form-control" type="Password" name="confirm_password" id="confirm_password">
            </div>
            <button type="Submit" class="btn btn-primary">Sign up</button>
            <input type="hidden" name="_token" value = "{{Session::token()}}">
        </form>
    </div>
    </div>
</div>
@endsection