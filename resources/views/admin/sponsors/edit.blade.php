@extends('layouts.admin.master')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <strong>Update</strong> Sponsor
      </div>
      <div class="card-body card-block">
        <form action="{{ route('sponsors.update', $sponsor->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            
            @csrf
            @method('put')
            
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="name" value="{{ $sponsor->name }}" class="form-control"></div>
          </div>
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Email</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="email" value="{{ $sponsor->email }}" class="form-control"></div>
          </div>
            <div class="row form-group">
              <div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
              <div class="col-12 col-md-9"><input type="file" required id="image" name="image" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="contact" class=" form-control-label">Contact</label></div>
              <div class="col-12 col-md-9"><input type="text" required id="contact" value="{{ $sponsor->contact }}" name="contact" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="country" class=" form-control-label">Country</label></div>
              <div class="col-12 col-md-9"><input type="country" value="{{ $sponsor->country }}" required id="country" name="country" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="dontaions" class=" form-control-label">Monthly/Annual Donation</label></div>
              <div class="col-12 col-md-9"><input type="dontaions" value="{{ $sponsor->donations }}" required id="dontaions" name="dontaions" class="form-control"></div>
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success btn-sm rounded">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
            <button type="reset" class="btn btn-danger btn-sm rounded">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
    </div>
  </div>
@endsection