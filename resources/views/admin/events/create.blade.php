@extends('layouts.admin.master')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <strong>Create</strong> Event
      </div>
      <div class="card-body card-block">
        <form action="{{ route('events.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            
            @csrf
            
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="name" placeholder="Enter Event Name..." class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3"><label for="details" class=" form-control-label">Details</label></div>
              <div class="col-12 col-md-9">
                  <textarea name="details" required id="details" class="form-control" cols="30" rows="8"></textarea>
                </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
              <div class="col-12 col-md-9"><input type="file" required id="image" name="image" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="date" class=" form-control-label">Date</label></div>
              <div class="col-12 col-md-9"><input type="date" required id="date" name="date" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="time" class=" form-control-label">Time</label></div>
              <div class="col-12 col-md-9"><input type="time" required id="time" name="time" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="time" class=" form-control-label">Location</label></div>
              <div class="col-12 col-md-9"><input type="text" required id="location" placeholder="Event Location" name="location" class="form-control"></div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="rounded btn btn-success btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="rounded btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
    </div>
  </div>
@endsection