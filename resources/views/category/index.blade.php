@extends('layouts.app')

@section('content')
<div class="container">
Category List

<a href="/category/create" class ="btn btn-success mb-3">New Category</a>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name </th>
        <th scope="col">Created At</th>
        <th scope="col">Update At</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category as $a)
            
      <tr>
      <th scope="row">{{$a ->id}}</th>
      <td>{{$a -> name}}</td>
      <td>{{$a -> created_at}}</td>
      <td>{{$a -> updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>  
</div>
@endsection