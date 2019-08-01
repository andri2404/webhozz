@extends ('layouts.app')

@section ('content')
<div class="container">

        <form action="/product/{{ $category->id}}/edit" method="POST">
            @csrf
            @method("PUT")
            <div class ="form-group">
                <label>Name</label>
                <input type="text" name="dari_form" class="form-control" placeholder="Product name" 
                value="{{ $product->name}}">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            
        </form>
        
</div>
@endsection