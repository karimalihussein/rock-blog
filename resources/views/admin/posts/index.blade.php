@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">
                Published Posts
                <div class="text-right">
                  <a href="{{ route('post.create') }}" class="btn btn-info">Create new post</a>
                </div>
        </div>


        @if($message = Session::get('success'))
        <div class="alert alert-success">

         {{ $message }}

        </div>

        @endif
    <div class="card-body">
            <table class="table table-hover">
                    <thead>
                     <th>
                        Image
                  </th>
                  <th>
                     Title
                  </th>
                  <th>
                     Edit
                  </th>
                  <th>
                   Trash
                </th>
                  </thead>
                  <tbody>
              @if($posts->count() > 0)
              @foreach ($posts as $post)
              <tr>
                  <td><img src="{{$post->featured}}" width="100px" height="50px" alt="{{$post->title}}"></td>
                  <td>{{$post->title}}</td>
                  <td><a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info">edit</a></td>
                  <td><a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-xs btn-danger">Trash</a></td>
              </tr>
          @endforeach
              @else
              <th colspan="5" class="text-center">No Published Posts</th>

              @endif
                  </tbody>
                 </table>
    </div>
</div>
@endsection
