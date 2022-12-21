@extends('layouts.admin.master')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <strong>Create</strong> Sponsor
      </div>
      <div class="card-body card-block">
        <form action="{{ route('sponsors.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            
            @csrf
            
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="name" placeholder="Enter Sponsor Name..." class="form-control"></div>
          </div>
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Email</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="email" placeholder="Enter Sponsor Email Address..." class="form-control"></div>
          </div>
            <div class="row form-group">
              <div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
              <div class="col-12 col-md-9"><input type="file" required id="image" name="image" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="contact" class=" form-control-label">Contact</label></div>
              <div class="col-12 col-md-9"><input type="text" required id="contact" placeholder="07xxxxxx" name="contact" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="country" class=" form-control-label">Country</label></div>
              <div class="col-12 col-md-9"><input type="country" placeholder="Country..." required id="country" name="country" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="dontaions" class=" form-control-label">Monthly/Annual Donation</label></div>
              <div class="col-12 col-md-9"><input type="dontaions" placeholder="KES/USD/DKK/EURO..." required id="dontaions" name="donations" class="form-control"></div>
            </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success rounded btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger rounded btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
    </div>
  </div>
@endsection