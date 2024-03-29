@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-13">
    <h1>Product List</h1>
    
  <div class="text-right">
<a href="/product/create" class ="btn btn-success mb-3">New Product</a>

  
      <a href="/product-export" class ="btn btn-warning mb-3">Export</a>
        </div>

        <div class="col-md-6">
            <form action="/product-import" method="POST" enctype="multipart/form-data">
              @csrf
                <input type="file" name="file">
                <button type="submit" class="btn btn-primary">Import</button>



            </form>


        </div>
      
    <form class="form-inline mb-3">
      <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="search.....">
      </div>
    <button type="submit" class="btn btn-primary"> Search</button>    
    </form>  <br/>
    <a href="/product/" class ="btn btn-info mb-3">Reset</a> 

    
    

<table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category </th>
        <th scope="col">Name </th>
        <th scope="col">Supplier </th>
        <th scope="col">Price </th>
        <th scope="col">Other </th>
        <th scope="col">Created At</th>
        <th scope="col">Update At</th>
        <th scope="col" colspan="4">Action</th>
      </tr>
    </thead>  
    <tbody>
          @forelse ($product as $a)
          
      <tr>
      <th scope="row">{{$a ->id}}</th>
      <td>{{$a -> category_id}}</td>
      <td>{{$a -> name }}</td>
      <td>{{$a -> supplier}}</td>
      <td>Rp.{{number_format($a -> price,0,',','.')}}</td>
      <td>{{$a -> other}}</td>
      <td>{{$a -> created_at}}</td>
      <td>{{$a -> updated_at}}</td>

      <td><a href="/product/{{$a->id}}/edit" class="btn btn-success">Edit</a>
        </td>
          <td>

      <form method ="POST" action ="/product/{{$a->id}}">
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