@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
    <h1>Category List</h1>
  <div class="text-right">
<a href="/category/create" class ="btn btn-success mb-3">New Category</a>
  </div>

    <form class="form-inline mb-3">
      <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="search.....">
      </div>
    <button type="submit" class="btn btn-primary"> Search</button>    
    </form>  <br/>
    <a href="/category" class ="btn btn-info mb-3">Reset</a> 

    
    

<table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name </th>
        <th scope="col">Created At</th>
        <th scope="col">Update At</th>
        <th scope="col" colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($category as $a)
            
      <tr>
      <th scope="row">{{$a ->id}}</th>
      <td>{{$a -> name}}</td>
      <td>{{$a -> created_at}}</td>
      <td>{{$a -> updated_at}}</td>

      <td><a href="/category/{{$a->id}}/edit" class="btn btn-success">Edit</a>
        </td>
          <td>

      <form method ="POST" action ="/category/{{$a->id}}">
        @csrf
        @method("DELETE")
            <button type="submit" class= "btn btn-danger" onclick="return confirm('Yakin untuk delete')">Delete</button>
      </form>
    </td>
  </tr> 
@empty
<tr>
    <td colspan="5">Data not Found</td>
</tr>
         
      @endforelse
    </tbody>
  </table>  
</div>
@endsection