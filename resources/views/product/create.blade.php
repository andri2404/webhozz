@extends ('layouts.app')

@section ('content')
<div class="container">

        <form action="/product/create" method="POST">
            @csrf
            <div class ="form-group">
                <label>Category</label>
                 <select name="category_id" class="form-control">

                     @foreach($category as $c)
                        <option value ="{{$c->id}}">{{$c->name}}</option>
                    @endforeach

                 </select>
                 
                <label>Name Product</label>
                <input type="text" name="name" class="form-control"placeholder="Product name">
                <label>Supplier</label>
                <input type="text" name="supplier" class="form-control"placeholder="Supplier name">
                <label>Price</label>
                <input type="integer" name="price" class="form-control"placeholder="price">

            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            
        </form>
        
</div>
@endsection