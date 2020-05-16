@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
            categories
            <div class="text-right">
              <a href="{{ route('category.create') }}" class="btn btn-info">crate new category</a>
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
                       cateogry name
                  </th>
                  <th>
                     Edting
                  </th>
                  <th>
                     deleting
                  </th>
                  </thead>
                  <tbody>
                @if($categories->count() > 0)
                @foreach ($categories as $cateogry)
                <tr>
                    <td>
                        {{ $cateogry->name }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit', ['id' => $cateogry->id]) }}" class="btn btn-xs btn-info">Edit</a>
                    </td>
                    <td>
                          <a href="{{ route('category.delete', ['id' => $cateogry->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                </tr>
            @endforeach
                @else
                <th colspan="5" class="text-center">No categories yet. </th>

                @endif
                  </tbody>
                 </table>
    </div>
</div>
@endsection
