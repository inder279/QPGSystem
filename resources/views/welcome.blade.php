@extends ('layouts.master')

@section('title')
QPG - Login or Signup
@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
    <h3> Sign up</h3>
        <form action={{route('signup')}} method="post">
            <div class="form-group">
            <label for="email">Your email </label>
            <input class = "form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
            <label for="first_name">Your First Name</label>
            <input class = "form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
            <label for="last_name">Your Last Name</label>
            <input class = "form-control" type="text" name="last_name" id="last_name">
            </div>
            <div class="form-group">
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
    <div class="col-md-6">
    <h3> Sign in</h3>
        <form action="#" method="post">
            <div class="form-group">
            <label for="email">Enter email </label>
            <input class = "form-control" type="text" name="email" id="email">
            </div>
           
            <div class="form-group">
            <label for="Password">Enter Password </label>
            <input class = "form-control" type="Password" name="password" id="password">
            </div>
            <button type="Submit" class="btn btn-primary">sign in</button>
        </form>
    </div>
</div>
</div>
</div>

@endsection