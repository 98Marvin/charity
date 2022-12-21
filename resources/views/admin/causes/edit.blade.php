@extends('layouts.admin.master')

@section('content')
<div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <strong>Edit</strong> Cause
      </div>
      <div class="card-body card-block">
        <form action="{{ route('causes.update', $cause->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            
            @csrf
            @method('put')
            
            <div class="row form-group">
            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
            <div class="col-12 col-md-9"><input type="text" required id="name" name="name" value="{{ $cause->name }}" class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3"><label for="details" class=" form-control-label">Details</label></div>
              <div class="col-12 col-md-9">
                  <textarea name="details" required id="details" class="form-control" cols="30" rows="8">{{ $cause->details }}</textarea>
                </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3"><label for="image" class=" form-control-label">Image</label></div>
              <div class="col-12 col-md-9"><input type="file" required id="image" name="image" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="raised" class=" form-control-label">Raised</label></div>
              <div class="col-12 col-md-9"><input type="number" value="{{ $cause->raised }}" required id="raised" name="raised" class="form-control"></div>
            </div>
            
            <div class="row form-group">
              <div class="col col-md-3"><label for="goal" class=" form-control-label">Goal</label></div>
              <div class="col-12 col-md-9"><input type="number" value="{{ $cause->goal }}" required id="goal" name="goal" class="form-control"></div>
            </div>
            
        </div>  
        <div class="card-footer">
            <button type="submit" class="btn text-white btn-warning rounded btn-sm">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
            <button type="reset" class="btn rounded btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
    </div>
  </div>
@endsection