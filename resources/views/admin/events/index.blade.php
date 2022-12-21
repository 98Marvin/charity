@extends('layouts.admin.master')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Events</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                    <li><a href="#">Events</a></li>
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
                    <strong class="card-title">Events</strong>
                    <button class="btn btn-success rounded float-right btn-sm"><a class="text-white" href="{{ route('events.create') }}"> Add Event</a></button>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Image</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($events as $event)
                
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->details }}</td>
                <td>
                    <img class="mx-auto d-block rounded" width="50%" src="{{ asset('public/front/uploads/events') }}/{{ $event->image }}" alt="">
                </td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->location }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-warning text-white btn-sm rounded mr-2" href="{{ route('events.edit', $event->id) }}">Edit</a>
                        <form action="{{ route('events.delete', $event->id) }}" method="post">
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