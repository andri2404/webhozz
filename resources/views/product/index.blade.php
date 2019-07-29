@extends('layouts.app')

@section('content')
<div class="container">
Product List

<a href="/product/create" class ="btn btn-success mb-3">New Product</a>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name </th>
        <th scope="col">Supplier </th>
        <th scope="col">Price</th>
        <th scope="col">Created At</th>
        <th scope="col">Update At</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $p)
            
      <tr>
      <th scope="row">{{$p ->id}}</th>
      <td>{{$p -> name}}</td>
      <td>{{$p -> supplier}}</td>
      <td>{{$p -> price}}</td>
      <td>{{$p -> created_at}}</td>
      <td>{{$p -> updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>  
</div>
@endsection