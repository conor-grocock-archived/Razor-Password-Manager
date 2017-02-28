@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-10">
                      <h4>{{ $group->name }}</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ URL::current() }}/edit"><button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button></a>
                        <a href="{{ URL::current() }}/delete"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                    </div>
                  </div>
                </div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-6">
                      <h4>Passwords</h4>
                      <ul>
                        @foreach ($group->passwords as $user)
                          <li>{{ $user->name }}</li>
                        @endforeach

                    </div>
                    <div class="col-md-6">
                      <h4>Users</h4>
                      <ul>
                        @foreach ($group->users as $user)
                          <li>{{ $user->name }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
