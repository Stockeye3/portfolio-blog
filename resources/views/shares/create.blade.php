@extends ('layouts.master')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        <h3> Add a new position </h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="/shares">
            <div class="form-group">
                {{csrf_field()}} 
                
                <label for="name">Share Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="price">Share Price :</label>
                <input type="text" class="form-control" name="price"/>
            </div>
            <div class="form-group">
                <label for="quantity">Share Quantity:</label>
                <input type="text" class="form-control" name="qty"/>
            </div>
            <button type="submit" class="btn btn-primary">Add new position</button>
        </form>
    </div>
</div>
@endsection