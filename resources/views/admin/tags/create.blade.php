@extends('layouts.app')

@section('content')
@include('admin.includes.errors')

<div class="card">
    <div class="card-header">
        Crete a new tag
        <div class="text-right">
          <a href="{{ route('tags') }}" class="btn btn-info">Back</a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('tag.store') }}" method="post" >
           {{csrf_field()}}
           <div class="form-group">
               <label for="name">Tag</label>
               <input type="text" name="tag" class="form-control">
           </div>

            <div class="form-group">
              <div class="text-center">
                <button class="btn btn-success" type="submit">
                    Store tag
                </button>
              </div>
            </div>
        </form>
    </div>
</div>

@endsection
