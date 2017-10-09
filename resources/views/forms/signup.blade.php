

@extends('master')


@section('content')


<div class="row">
    <div class="col-md-12">
        <h1>{{ $title }}</h1>

    </div>
</div><br>

<div class="container">
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">

            <div class="form-group row">
                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm password" name="password_confirmation">
                </div>
            </div>
            <input class='btn-success' type="submit" name="signup" value="SignUp">

        </div>

    </form>


    @endsection;