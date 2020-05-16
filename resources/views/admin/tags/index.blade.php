@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
            Tags
            <div class="text-right">
              <a href="{{ route('tag.create') }}" class="btn btn-info">Create new tag</a>
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
                       Tag name
                  </th>
                  <th>
                     Edting
                  </th>
                  <th>
                     deleting
                  </th>
                  </thead>
                  <tbody>
                @if($tags->count() > 0)
                @foreach ($tags as $tag)
                <tr>
                    <td>
                        {{ $tag->tag }}
                    </td>
                    <td>
                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info">Edit</a>
                    </td>
                    <td>
                          <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                </tr>
            @endforeach
                @else
                <th colspan="5" class="text-center">No Tags yet. </th>

                @endif
                  </tbody>
                 </table>
    </div>
</div>
@endsection
