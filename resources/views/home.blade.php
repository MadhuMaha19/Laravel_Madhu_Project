@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> User ID</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </head>
        <body>
        <div class="container">
        <br/>
        <h3 align="center"> Id card</h3>
        <br/>
       
      
        <br/>
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">User Form</h3>
        </div>
        <div class="panel-body">
        <br />
        @if(session()->has('success'))
        <div class="alert alert-success">
        {{session()->get('success')}}
        </div>
        @endif
        <form method="post" action="submit" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Select your preference</lable>
        <div class="col-md-8">
        <input type="radio" id="smt-fld-1-2" value="true" name="id_format"> Education id  </lable>
        <input type="radio" id="smt-fld-1-3" value="false" name="id_format"> Hospital id </lable>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter Organisation name</lable>
        <div class="col-md-8">
        <input type="text" name="organisation_name" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter Organisation address</lable>
        <div class="col-md-8">
        <input type="text" name="organisation_address" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user name</lable>
        <div class="col-md-8">
        <input type="text" name="user_name" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user designation</lable>
        <div class="col-md-8">
        <input type="text" name="designation" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> upload user image</lable>
        <div class="col-md-8">
        <input type="file" name="user_image"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user address</lable>
        <div class="col-md-8">
        <input type="text" name="address" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user dob</lable>
        <div class="col-md-8">
        <input type="date" name="DOB" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user blood group</lable>
        <div class="col-md-8">
        <input type="text" name="blood_group" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user phone number</lable>
        <div class="col-md-8">
        <input type="tel" name="phone_number" pattern="[0-9]{10}" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> Enter user email address</lable>
        <div class="col-md-8">
        <input type="text" name="email_id" class="form-control"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
        <lable class="col-md-4" align="right"> upload background Image</lable>
        <div class="col-md-8">
        <input type="file" name="bg_image"/>
        </div>
        </div>
        </div>
        <div class="form-group">
        <br/>
        <br/>
        <input type="submit" name="home" class="btn btn-primary" value="submit"/>
        </div>
        </form>

        </div>
        </div>
        </body>
</html>

