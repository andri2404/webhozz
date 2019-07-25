@extends ('layouts.app')

@section ('content')
<div class="container">

        <form action="/category/create" method="POST">
            @csrf
            <div class ="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"placeholder="Product name">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            
        </form>
        
</div>
@endsection