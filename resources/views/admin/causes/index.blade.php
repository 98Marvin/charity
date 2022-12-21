@extends('layouts.admin.master')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Causes</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                    <li><a href="#">Causes</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="col-sm-12">
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
      <span class="badge badge-pill badge-success">Success</span> {{ nl2br($message) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Causes</strong>
                    <button class="btn btn-success rounded float-right btn-sm"><a class="text-white" href="{{ route('causes.create') }}"> Add Cause</a></button>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Image</th>
                <th>Raised</th>
                <th>Goal</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($causes as $cause)
                
            <tr>
                <td>{{ $cause->name }}</td>
                <td>{{ $cause->details }}</td>
                <td>
                    <img class="mx-auto d-block rounded" width="50%" src="{{ asset('public/front/uploads/causes') }}/{{ $cause->image }}" alt="">
                </td>
                <td>{{ $cause->raised }}</td>
                <td>{{ $cause->goal }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-warning text-white btn-sm rounded mr-2" href="{{ route('causes.edit', $cause->id) }}">Edit</a>
                        <form action="{{ route('causes.delete', $cause->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm rounded">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


   

@endsection