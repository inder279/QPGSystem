@extends ('layouts.master')
@section('title')
QPG - Admin
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
<div class="col-md-6">
    <h3> Admin Log in</h3>
        
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
            <form action="{{route('adminLoginControl')}}" method="post">
            
            
        
            <label for="email">Enter email </label>
            <input class = "form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
            </div>
           
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            <label for="Password">Enter Password </label>
            <input class = "form-control" type="Password" name="password" id="password">
            </div>
            <button type="Submit" class="btn btn-primary">Log in</button>
            <input type="hidden" name="_token" value = "{{Session::token()}}">
        </form>
    </div>
@endsection