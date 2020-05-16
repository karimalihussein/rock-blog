@extends('layouts.app')
@section('content')
    <div class="card">
            <div class="card-header">
                    Trashed Posts
            </div>
     
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Restore</th>
                    <th>Destroy</th>
                </thead>
                <tbody>
                  @if($posts->count()>0)
                    @foreach($posts as $post)
                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px"></td>
                        <td>{{$post->title}}</td>
                        <td><a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                        
                        <td><a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-xs btn-success">Restore</a></td>
                        <td><a href="{{route('post.kill',['id'=>$post->id])}}" class="btn btn-xs btn-danger">Delete</a></td>

                    </tr>
                    </tr>
                    @endforeach
                  @else
                  <th colspan="5" class="text-center">No Trashed Posts</th>

                  @endif

                </tbody>
            </table>
        </div> 
    </div>
@stop