<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
//-->

@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')
    
    @include('includes.message-block')

    <div class="row">

        <!--Sign Up-->
        <div class="col-md-6">
            <h3>Sign up</h3>
              <form action="{{ route('signup') }}" method="post">

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>

                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }} ">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} ">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit class=" btn "btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> 
              </form>  
        </div>

        <!--Sign In-->
        <div class="col-md-6">
              <h3>Sign in</h3> 
              <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>

             
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} ">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit class=" btn "btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}"> 

              </form>  
        </div>
    </div>
@endsection