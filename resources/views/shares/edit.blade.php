@extends ('layouts.master')


@section ('content')

<div class="card uper">
    <div class="card-header">
        <h3> Edit your position </h3>
    </div>
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
      <form method="post" action="/shares/{{$share->id}}">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="name" value={{$share->name}} />
        </div>
        <div class="form-group">
          <label for="price">Share Price :</label>
          <input type="text" class="form-control" name="price" value={{$share->price}} />
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="qty" value={{$share->qty}}  />    
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>

@endsection