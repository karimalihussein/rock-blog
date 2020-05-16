@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

    <div class="card">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
    
             {{ $message }}
    
            </div>
    
            @endif
        <div class="card-header">
            Edit blog settings
        </div>
        <div class="card-body">
            <form action="{{route('settings.update')}}" method="post">
                {{csrf_field()}}
                <div class="from-group">
                    <label for="name">site Name</label>
                    <input type="text"name="site_name" value="{{$settings->site_name}}" class="form-control">
                </div>
                <div class="from-group">
                    <label for="email">address</label>
                    <input type="text"name="address" class="form-control" value="{{$settings->address}}">
                </div>
                <div class="from-group">
                    <label for="email">contact phone</label>
                    <input type="text"name="contact_number" class="form-control" value="{{$settings->contact_number}}">
                </div>
                <div class="from-group">
                    <label for="email">contact email</label>
                    <input type="text"name="contact_email" class="form-control" value="{{$settings->contact_email}}">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Update Site Settings</button>
                </div>
            </form>
        </div>
    </div>

@stop