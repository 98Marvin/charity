@extends('layouts.admin.master')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Volunteers</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                    <li><a href="#">Volunteers</a></li>
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
                    <strong class="card-title">Volunteers</strong>
                    <button class="btn btn-success rounded float-right btn-sm"><a class="text-white" href="{{ route('volunteers.create') }}"> Add Volunteer</a></button>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Motive</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($volunteers as $volunteer)
                
            <tr>
                <td>{{ $volunteer->name }}</td>
                <td>{{ $volunteer->email }}</td>
                <td>{{ $volunteer->contact }}</td>
                <td>{{ $volunteer->motive }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-warning text-white btn-sm rounded mr-2" href="{{ route('volunteers.edit', $volunteer->id) }}">Edit</a>
                        <form action="{{ route('volunteers.delete', $volunteer->id) }}" method="post">
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