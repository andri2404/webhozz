@extends ('layouts.app')

@section ('content')
<div class="container">

        <form action="/product/{{ $product->id}}" method="POST">
            @csrf
            @method("PUT")
            
            <div class="form-group">
                <label> Category</label>
                <select name="category_id" class="form-control">
                    @foreach ($category as $c)
                    <option value="{{$c->id}}"{{ $product->category_id == $c->id? 'selected': ''}}>
                        {{ $c->name}}</option>
                       
                    @endforeach
                </select> 





            <div class ="form-group">
                <label>Name</label>
                <input type="text" name="dari_form" class="form-control" placeholder="Product name" 
                value="{{ $product->name}}">

                <label>Supplier</label>
                <input type="text" name="dari_form" class="form-control" placeholder="Supplier name" 
                value="{{ $product->supplier}}">

                <label>Price</label>
                <input type="integer" name="dari_form" class="form-control" placeholder=" Price" 
                value="{{ $product->price}}">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            
        </form>
        
</div>
@endsection