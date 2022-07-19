@extends('brands.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New brand product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('brands.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('brands.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <strong>Company</strong>
            <input type="text" name="company" class="form-control" placeholder="company">
        </div>


        <strong>adresss</strong>
        <input type="text" name="adress" class="form-control" placeholder="adress">
    </div>
    <strong>phone number</strong>
            <input type="text" name="phone" class="form-control" placeholder="phone">
        </div>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>the famouse twinty brand</strong>
                <textarea class="form-control" style="height:280px" name="brand" placeholder="brand"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection